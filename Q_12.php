<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>حساب الفاتورة والخصم</title>
</head>
<body>

    <h2>حساب سعر المنتجات والخصم</h2>

    <form method="POST" action="">
        <label>سعر المنتج:</label><br>
        <input type="text" name="price" required><br><br>

        <label>عدد القطع المطلوب:</label><br>
        <input type="text" name="quantity" required><br><br>

        <button type="submit" name="calculate">احسب الفاتورة</button>
    </form>

    <hr>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        if (!is_numeric($price) || !is_numeric($quantity)) {
            echo "<p style='color:red;'>خطأ: تأكد أن input ده رقم وليس حروف!</p>"; 
        } 
        elseif ($price <= 0 || $quantity <= 0) {
            echo "<p style='color:red;'>خطأ: ينفعش ارقام سالبة أو صفر، برجاء أدخل قيم موجبة!</p>"; //[cite: 1]
        }
        else {
            $totalPrice = $price * $quantity; 

            
            if ($totalPrice < 1000) {
                $discountPercent = 0.10;
            } else {
                $discountPercent = 0.15; 
            }

            $discountAmount = $totalPrice * $discountPercent; 
            $finalPrice = $totalPrice - $discountAmount;

            echo "<h3>نتيجة الحساب:</h3>";
            echo "السعر الكلي قبل الخصم: " . $totalPrice . " ج<br>";
            echo "نسبة الخصم المستحقة: " . ($discountPercent * 100) . "%<br>";
            echo "قيمة الخصم: " . $discountAmount . " ج<br>";
            echo "<strong>السعر النهائي بعد الخصم: " . $finalPrice . " ج</strong>";
        }
    }
    ?>

</body>
</html>