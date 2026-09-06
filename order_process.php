<?php
require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: order.php');
    exit;
}

$required = ['nama', 'email', 'whatsapp', 'paket', 'judul', 'deskripsi'];
foreach ($required as $field) {
    if (empty(trim($_POST[$field] ?? ''))) {
        header('Location: order.php?error=1');
        exit;
    }
}

$orderId = 'ORD-' . time();
$order = [
    'id' => $orderId,
    'nama' => htmlspecialchars(trim($_POST['nama'])),
    'email' => htmlspecialchars(trim($_POST['email'])),
    'whatsapp' => htmlspecialchars(trim($_POST['whatsapp'])),
    'paket' => htmlspecialchars(trim($_POST['paket'])),
    'judul' => htmlspecialchars(trim($_POST['judul'])),
    'deskripsi' => htmlspecialchars(trim($_POST['deskripsi'])),
    'budget' => htmlspecialchars(trim($_POST['budget'] ?? '')),
    'deadline' => htmlspecialchars(trim($_POST['deadline'] ?? '')),
    'referensi' => htmlspecialchars(trim($_POST['referensi'] ?? '')),
    'date' => date('Y-m-d H:i:s'),
    'status' => 'pending'
];

$orders = loadData('orders.json');
if (!isset($orders['orders'])) {
    $orders['orders'] = [];
}
$orders['orders'][] = $order;
saveData('orders.json', $orders);

header('Location: thank_you.php?id=' . urlencode($orderId));
exit;
?>
