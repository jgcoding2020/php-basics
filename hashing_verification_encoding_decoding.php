<?php
// Hashing, Verification, Base64 Encoding/Decoding, and OpenSSL Encryption/Decryption Demo

// Sample Password
$password = "my_secure_password";

// 1. MD5 Hashing and Verification
echo "1. MD5 Hashing and Verification:\n";
$md5Hash = md5($password);
echo "MD5 Hash: $md5Hash\n";

// Verification
$userInput1 = "my_secure_password";
if (md5($userInput1) === $md5Hash) {
    echo "MD5 Hashes match.\n";
} else {
    echo "MD5 Hashes do not match.\n";
}

// 2. SHA-1 Hashing and Verification
echo "\n2. SHA-1 Hashing and Verification:\n";
$sha1Hash = sha1($password);
echo "SHA-1 Hash: $sha1Hash\n";

// Verification
$userInput2 = "my_secure_password";
if (sha1($userInput2) === $sha1Hash) {
    echo "SHA-1 Hashes match.\n";
} else {
    echo "SHA-1 Hashes do not match.\n";
}

// 3. SHA-256 Hashing and Verification
echo "\n3. SHA-256 Hashing and Verification:\n";
$sha256Hash = hash("sha256", $password);
echo "SHA-256 Hash: $sha256Hash\n";

// Verification
$userInput3 = "my_secure_password";
if (hash("sha256", $userInput3) === $sha256Hash) {
    echo "SHA-256 Hashes match.\n";
} else {
    echo "SHA-256 Hashes do not match.\n";
}

// 4. Bcrypt Password Hashing and Verification
echo "\n4. Bcrypt Password Hashing and Verification:\n";
$bcryptHash = password_hash($password, PASSWORD_BCRYPT);
echo "Bcrypt Hash: $bcryptHash\n";

// Verification
$userInput4 = "my_secure_password";
if (password_verify($userInput4, $bcryptHash)) {
    echo "Bcrypt Hashes match.\n";
} else {
    echo "Bcrypt Hashes do not match.\n";
}

// 5. Base64 Encoding and Decoding
echo "\n5. Base64 Encoding and Decoding:\n";
$base64Encoded = base64_encode($password);
echo "Original String: $password\n";
echo "Base64 Encoded: $base64Encoded\n";
$base64Decoded = base64_decode($base64Encoded);
echo "Base64 Decoded: $base64Decoded\n";

// 6. OpenSSL Encryption and Decryption
echo "\n6. OpenSSL Encryption and Decryption:\n";
$encryptionMethod = "AES-256-CBC";
$secretKey = "my_secret_key";
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($encryptionMethod));
$encrypted = openssl_encrypt($password, $encryptionMethod, $secretKey, 0, $iv);
echo "Original String: $password\n";
echo "Encrypted String: $encrypted\n";
$decrypted = openssl_decrypt($encrypted, $encryptionMethod, $secretKey, 0, $iv);
echo "Decrypted String: $decrypted\n";
?>
