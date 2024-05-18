<?php

class Invoice {
    private $invoiceNumber;
    private $invoiceDate;
    private $dueDate;
    private $billTo;
    private $items;

    public function __construct($invoiceNumber, $invoiceDate, $dueDate, $billTo) {
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceDate = $invoiceDate;
        $this->dueDate = $dueDate;
        $this->billTo = $billTo;
        $this->items = array();
    }

    public function addItem($description, $quantity, $pricePerUnit) {
        $this->items[] = new Item($description, $quantity, $pricePerUnit);
    }

    public function getTotalAmount() {
        $totalAmount = 0;
        foreach ($this->items as $item) {
            $totalAmount += $item->getAmount();
        }
        return $totalAmount;
    }

    public function generateInvoice() {
        
        echo "Invoice no: " . $this->invoiceNumber . "<br>";
        echo "Invoice date: " . $this->invoiceDate . "<br>";
        echo "Bill to: " . $this->billTo . "<br>";
        echo "Due date: " . $this->dueDate . "<br>";

        
        echo "<table border='1'>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Amount</th>
                </tr>";

        
        foreach ($this->items as $item) {
            echo "<tr>
                    <td>{$item->getDescription()}</td>
                    <td>{$item->getQuantity()}</td>
                    <td>Rp. " . number_format($item->getPricePerUnit(), 0, ',', '.') . "</td>
                    <td>Rp. " . number_format($item->getAmount(), 0, ',', '.') . "</td>
                </tr>";
        }

        
        echo "<tr>
                <td colspan='3'><strong>Total</strong></td>
                <td><strong>Rp. " . number_format($this->getTotalAmount(), 0, ',', '.') . "</strong></td>
            </tr>";

        
        echo "</table>";

        
        echo "<br>";
        echo "Pembayaran dapat dilakukan melalui rekening berikut:<br>";
        echo "Bank Mandiri<br>";
        echo "1240005420253<br>";
        echo "atas nama " . $this->billTo . ".";
    }
}

class Item {
    private $description;
    private $quantity;
    private $pricePerUnit;

    public function __construct($description, $quantity, $pricePerUnit) {
        $this->description = $description;
        $this->quantity = $quantity;
        $this->pricePerUnit = $pricePerUnit;
    }

    public function getAmount() {
        return $this->quantity * $this->pricePerUnit;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPricePerUnit() {
        return $this->pricePerUnit;
    }
}


$invoice = new Invoice("INV/IX/2023/01", "29 Sep 2023", "13 Okt 2023", "Ahmad Mubarok");
$invoice->addItem("Open journal system (OJS) untuk Penelitian dan Pengabdian Masyarakat pada Fakultas Ilmu kehatan, Fakultas Teknologi Informasi dan Komputer, Fakultas Manajemen dan Bisnis.", 1, 1500000);
$invoice->addItem("Website LPPM", 1, 0);


$invoice->generateInvoice();
?>