<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>


<h2>Place your Order</h2>
<form method="POST" action="process.php">
    <label>Name</label>
    <input type="text" name="customerName" value="<?php echo $customerName; ?>" required>

    <label>Customer Type</label>
    <select name="customerType">
        <option value="Student">Student</option>
        <option value="Employee">Employee</option>
        <option value="Guest">Guest</option>
    </select>

    <label>Product</label>
    <select name="product">
    <option value="M1">Chicken Adobo Meal</option>
    <option value="M2">Pork Sisig Meal</option>
    <option value="M3">Vegetable Meal</option>
    <option value="D1">Bottled Water</option>
    <option value="D2">Iced Tea</option>
    </select>

    <label>Quantity</label>
    <input name="quantity" type = "number" min = "1" max = "10" required>
    <label>Budget (PHP)</label>
    <input name="budget" type="number" min="0" step="0.01" required>
    <button type = "submit">Process Order</button>
</form>
<?php include 'footer.php'; ?>