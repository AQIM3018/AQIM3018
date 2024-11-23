@extends('siswa.layout.app')
@section('content')
<div class="container">
    <h2 class="text-center mb-4">Survey</h2>

    <!-- Pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('pretest.store')}}" method="POST" enctype = 'multipart/form-data'>
        @csrf

        <!-- Iterasi Pertanyaan dari Database -->
        @foreach($pertanyaan as $p)
            <div class="mb-4">
                <p class="fw-bold">{{ $loop->iteration }}. {{ $p->pertanyaan }}</p>
                
                <!-- Opsi Radio Button -->
                <div class="d-flex justify-content-between">
                    @for($i = 1; $i <= 5; $i++)
                        <label class="radio-button flex-fill text-center">
                            <input 
                                type="radio" 
                                name="jawaban[{{ $p->id }}]" 
                                value="{{ $i }}" 
                                required
                            >
                            <span>{{ $i }}</span>
                        </label>
                    @endfor
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary w-100">Kirim Jawaban</button>
    </form>
</div>

<style>
    /* Styling radio button */
    .radio-button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        border: 2px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
        font-size: 16px;
        text-align: center;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        margin: 0 5px; /* Jarak antar tombol */
        width: 100%;
        box-sizing: border-box; /* Pastikan ukuran konsisten */
    }

    .radio-button span {
        display: block;
        padding: 15px 0; /* Padding tetap */
    }

    .radio-button input {
        display: none; /* Sembunyikan input asli */
    }

    /* Ketika tombol radio aktif, ubah border saja */
    .radio-button input:checked + span {
        border: 2px solid #000; /* Border tetap 2px */
        box-shadow: 0 0 5px #000; /* Tambahkan efek visual */
        background-color: transparent;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .radio-button:hover span {
        border-color: #007bff; /* Border berubah warna pada hover */
    }

    .d-flex .flex-fill {
        flex: 1; /* Membuat setiap radio button sama lebar */
    }
</style>

@endsection