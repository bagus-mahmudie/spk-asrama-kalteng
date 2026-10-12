<?php
// Local setup only. Never expose account provisioning through HTTP.
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

require dirname(__DIR__) . '/include/conn.php';

function promptValue(string $label): string
{
    fwrite(STDERR, $label . ': ');
    $value = fgets(STDIN);
    if ($value === false) {
        throw new RuntimeException('Input tidak lengkap.');
    }
    return rtrim($value, "\r\n");
}

try {
    $identity = trim(promptValue('Username'));
    $password = promptValue('Password baru (minimal 12 karakter; input terlihat di terminal)');
    $confirmation = promptValue('Ulangi password');
    if ($identity === '' || strlen($identity) > 50) {
        throw new RuntimeException('Identitas akun kosong atau terlalu panjang.');
    }
    if (strlen($password) < 12 || strlen($password) > 72 || $password !== $confirmation) {
        throw new RuntimeException('Gunakan password 12–72 karakter dengan konfirmasi yang sama.');
    }
    
    $stmt = $db->prepare('SELECT id_user FROM saw_users WHERE username = ?');
    $stmt->bind_param('s', $identity);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) { throw new RuntimeException('Username sudah digunakan.'); }
    // Match the legacy login-act.php password format; no fixed password is shipped.
    $hash = md5($password);
    $stmt = $db->prepare('INSERT INTO saw_users (username, password) VALUES (?, ?)');
    $stmt->bind_param('ss', $identity, $hash);
    $stmt->execute();
    unset($password, $confirmation, $hash);
    fwrite(STDOUT, "Akun lokal berhasil dibuat.\n");
} catch (Throwable $error) {
    fwrite(STDERR, "Akun belum dibuat. Periksa input, koneksi database, dan kemungkinan akun sudah ada.\n");
    exit(1);
}
