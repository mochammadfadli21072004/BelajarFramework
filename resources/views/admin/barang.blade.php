@extends('utama')

@section('judul_menu')
    {{-- $data dikirim dari Controller melalui $id --}}
    ini ditampilkan dari section judul menu, dengan data : {{ $data }} <br>  
    
    {{-- Bagian @php kosong bisa dihapus atau dibiarkan --}}
    @php
        
    @endphp

    {{-- Variabel $isi_data kini sudah dikirim dari Controller --}}
    @if ($isi_data == 1)
        data diisi dengan angka 1

    @elseif ($isi_data > 1)
        data diisi dengan angka lebih dari 1

    @else 
        tidak ada data atau data tidak valid 
    @endif

    {{-- Perulangan disesuaikan: mulai dari $i=0, berhenti saat $i <= $max_loop (5) --}}
    @for ($i = 0; $i <= $max_loop; $i++)
        nilainya adalah {{ $i }} <br>
    @endfor
    
@endsection

@section('isi_menu')
    ini isi dari section isi menu
@endsection