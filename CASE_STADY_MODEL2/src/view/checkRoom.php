<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Hoa don Phong</legend>
        <table>
            <tr>
                <td>StaffCode</td>
                <td><input type="text" name="staffCode" value="<?php echo $order->getStaffCode(); ?>"></td>
            </tr>
            <tr>
                <td>orderCode</td>
                <td><input type="number" name="roomCode" value="<?php echo $order->getRoomCode(); ?>"></td>
            </tr>
            <tr>
                <td>dayin</td>
                <td><input type="date" name="dayin" value="<?php echo $order->getDayIn(); ?>"></td>
            </tr>
            <tr>
                <td>dayout</td>
                <td><input type="date" name="dayout" value="<?php echo $order->getDayOut(); ?>"></td>
            </tr>
            <tr>
                <td>buy price</td>
                <td><input type="number" name="buyPrice" value="<?php echo $order->getBuyPrice(); ?>"></td>
            </tr>
        </table>
        <button type="submit">Thanh Toan</button>
    </fieldset>
</form>
</body>
</html>