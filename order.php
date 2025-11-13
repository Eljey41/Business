<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <section>
        <h2>Place your Coffee Order</h2>
        <form action="">
            <label for="coffee_name">Select Coffee:</label>
            <select name="coffee_name" id="coffee_name" required>
                <option value="">Choose Coffee</option>
                <option value="Brusko">Brusko</option>
                <option value="Mocha">Mocha</option>
                <option value="Macchiato">Macchiato</option>
                <option value="Vanila">Vanila</option>
                <option value="Caramel">Caramel</option>
                <option value="Spanish Latte">Spanish Latte</option>
            </select>
            
            <label for="quantity">Quantity</label>
            <input type="number" min="1" value="1" required>

            <button type="submit">Place Order</button>
        </form>
    </section>

    <section>
        <h2>Confirm your Order</h2>
        <table>
            <tr>
                <th>Coffee</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Date</th>
            </tr>
        </table>
    </section>

    <a href="index.php">Dashboard</a>   
</body>
</html>