@extends('Base.Master')

@section('navbar')
<div class="w-100 d-flex flex-column p-1" style="color:#FFF5E0;">
    <div class="d-flex flex-row" style="background-color:#FAF0D7">
        <img src="{{asset('images/assets/logo.png')}}" class="img-responsive" style="height:15vh; width:7vw;" alt="">
        <h1 class="ms-3" style="margin-top:3vh; color:black;">Sekolah Minggu Buddha Vihara Guna Vijaya</h1>
        <div class="ms-auto d-flex flex-row">
        @if(Auth::user()->role_code == 'LEC')
        <h2 for="Class Code" style="margin-top:3vh; margin-right:3vh; color:black;">Halo, Guru</h2>
        @endif
        @if(Auth::user()->role_code == 'STD')
        <h2 for="Class Code" style="margin-top:3vh; margin-right:3vh; color:black;">Halo, Siswa</h2>
        @endif
        </div>
    </div>
    <div style="height: 2px" class="bg-secondary mt-1"></div>
    <div class="topnav" id="myTopnav">
        <div class="w-100 d-flex" >
            <div class="btn-group dropdown ">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle border border-2 rounded p-3 border-secondary" style="background-color:#9ED2BE" role="button" id="dropdownSosializationMenu">Sosialization</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                  <a class="dropdown-item" href="/">Forum Diskusi</a>
                </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle border border-2 rounded p-3 border-secondary " style="background-color:#9ED2BE" role="button" id="dropdownExternalizationMenu">Externalization</h1>
                </div>
                @if(Auth::user()->role_code == 'STD')
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                    <a class="dropdown-item" href="/learning-classes/externalization-assignments">Tugas</a>
                    <a class="dropdown-item" href="/learning-classes/externalization-result">Nilai Tugas</a>
                    <a class="dropdown-item" href="/learning-classes/internalization-assignments">Ujian</a>
                    <a class="dropdown-item" href="/learning-classes/internalization-result">Nilai Ujian</a>
                </div>
                @endif
                @if(Auth::user()->role_code == 'LEC')
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                    <a class="dropdown-item" href="/learning-classes/externalization-assignments">Tugas</a>
                    <a class="dropdown-item" href="/learning-classes/externalization-result">Jawaban Tugas</a>
                    <a class="dropdown-item" href="/learning-classes/internalization-exercises">Ujian</a>
                    <a class="dropdown-item" href="/learning-classes/internalization-result">Jawaban Ujian</a>
                </div>
                @endif
            </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle border border-2 rounded p-3 border-secondary" style="background-color:#9ED2BE" role="button" id="dropdownSosializationMenu">Combination</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                  <a class="dropdown-item" href="/learning-classes/combination">Bahan Ajar</a>
                </div>
            </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle border border-2 rounded p-3 border-secondary" style="background-color:#9ED2BE" role="button" id="dropdownInternationalizationMenu">Internationalization</h1>
                </div>
                @if(Auth::user()->role_code == 'LEC')
                <div class="dropdown-menu dropdown-menu-start" style="width:30wv;"  >
                    <a class="dropdown-item" href="https://create.kahoot.it/auth/login">Quiz</a>
                </div>
                @endif
                @if(Auth::user()->role_code == 'STD')
                <div class="dropdown-menu dropdown-menu-start" style="width:30wv;"  >
                    <a class="dropdown-item" href="https://kahoot.it/">Quiz</a>
                </div>
                @endif
            </div>
            <div class="btn-group dropdown" style="margin-left:37vw;">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle" role="button" id="dropdownOtherMenu">Lainnya</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownOtherMenu">
                  @if(Auth::user()->role_code == 'LEC')
                    <a class="dropdown-item" href="/new-forum">Tambah Forum Diskusi</a>
                    <a class="dropdown-item" href="/manage-users">Pengguna</a>
                    <a class="dropdown-item" href="/manage-classes">Tambah Kelas</a>
                  @endif
                  <a class="dropdown-item" href="/logout">logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection


