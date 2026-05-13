@extends('layouts.app')

@section('content')

<section class="form-section">
    <div class="form-container">
        <h2>Request Quotation</h2>

@if(session('success'))
    <div class="success-box">
        {{ session('success') }}
    </div>
@endif
        
        <form action="/quotation" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="text" name="nama" placeholder="Nama" required>
            </div>

            <div class="form-group">
                <input type="text" name="perusahaan" placeholder="Perusahaan">
            </div>

            <div class="form-group">
                <input type="text" name="whatsapp" placeholder="WhatsApp" required>
            </div>

            <!-- JENIS PACKAGING -->
            <div class="form-group">
                <select name="jenis_packaging" id="jenis" onchange="hitungEstimasi()" required>
                    <option value="">Pilih Jenis Packaging</option>
                    <option>Box Packaging</option>
                    <option>Food Packaging</option>
                    <option>Cosmetic Packaging</option>
                    <option>Industrial Packaging</option>
                </select>
            </div>

            <!-- MATERIAL -->
            <div class="form-group">
                <select name="material">
                    <option value="">Pilih Material</option>
                    <option>Kertas</option>
                    <option>Karton</option>
                    <option>Plastik</option>
                    <option>Custom</option>
                </select>
            </div>

            <!-- QUANTITY -->
            <div class="form-group">
                <input type="number" name="quantity" id="qty" placeholder="Quantity" onkeyup="hitungEstimasi()" required>
            </div>

            <!-- BUDGET -->
            <div class="form-group">
                <select name="budget" id="budget" onchange="setBudgetText(); hitungEstimasi();" required>
                    <option value="">Pilih Budget</option>
                    <option value="UMKM">UMKM (1jt - 5jt)</option>
                    <option value="Menengah">Brand Menengah (5jt - 20jt)</option>
                    <option value="Perusahaan">Perusahaan Besar (20jt+)</option>
                </select>
            </div>

            <!-- AUTO TEXT BUDGET -->
            <div class="form-group">
                <input type="text" id="budgetText" placeholder="Estimasi budget akan muncul..." readonly>
            </div>

            <!-- ESTIMASI HARGA -->
            <div class="form-group">
                <input type="text" id="estimasiHarga" placeholder="Estimasi harga akan muncul..." readonly>
            </div>

            <!-- DESKRIPSI -->
            <div class="form-group">
    <label>Upload Desain</label>

    <div class="upload-box" onclick="document.getElementById('fileInput').click()">
        <p id="uploadText">Klik atau drag file ke sini</p>
        <input type="file" name="file_desain" id="fileInput" onchange="previewFile()" hidden>
    </div>
</div>
    <label>Upload Desain</label>

    <div class="upload-box" onclick="document.getElementById('fileInput').click()">
        <p id="uploadText">Klik atau drag file ke sini</p>
        <input type="file" name="file_desain" id="fileInput" onchange="previewFile()" hidden>
    </div>
</div>

            <button type="submit" class="btn-submit">Kirim Request</button>
        </form>
    </div>
</section>

<script>
// BUDGET TEXT
function setBudgetText() {
    let val = document.getElementById("budget").value;
    let text = "";

    if (val === "UMKM") {
        text = "Rp 1.000.000 - Rp 5.000.000";
    } else if (val === "Menengah") {
        text = "Rp 5.000.000 - Rp 20.000.000";
    } else if (val === "Perusahaan") {
        text = "Rp 20.000.000+";
    }

    document.getElementById("budgetText").value = text;
}

// SMART CALCULATOR
function hitungEstimasi() {
    let jenis = document.getElementById("jenis").value;
    let qty = parseInt(document.getElementById("qty").value);
    let budget = document.getElementById("budget").value;

    if (!jenis || !qty || !budget) {
        document.getElementById("estimasiHarga").value = "";
        return;
    }

    let harga = 0;

    if (jenis === "Box Packaging") harga = 5000;
    if (jenis === "Food Packaging") harga = 3000;
    if (jenis === "Cosmetic Packaging") harga = 8000;
    if (jenis === "Industrial Packaging") harga = 10000;

    let diskon = 1;
    if (qty >= 500 && qty <= 1000) diskon = 0.9;
    if (qty > 1000) diskon = 0.8;

    let total = harga * qty * diskon;

    let adjust = 1;
    if (budget === "UMKM") adjust = 0.9;
    if (budget === "Perusahaan") adjust = 1.2;

    total = total * adjust;

    let min = total * 0.85;
    let max = total * 1.15;

    function rupiah(angka) {
        return "Rp " + Math.round(angka).toLocaleString();
    }

    document.getElementById("estimasiHarga").value =
        rupiah(min) + " - " + rupiah(max);
}

function previewFile() {
    let input = document.getElementById("fileInput");
    let text = document.getElementById("uploadText");

    if (input.files && input.files[0]) {
        text.innerHTML = "✅ " + input.files[0].name;
    } else {
        text.innerHTML = "Klik atau drag file ke sini";
    }
}
</script>

@endsection