@extends('Base.Navbar')

@section('title','User Profile')

@section('body')
    <main class="form-signin d-flex align-items-center justify-content-center">
        <div class="w-75 d-flex justify-content-center border border-5 rounded p-3" style="color:black;">
            @if($class != null)
                <form action="/save-edit-class/{{$class->class_code}}" method="POST" class="w-100 d-flex flex-column">
                    @csrf
                    <div class="w-100 d-flex justify-content-center">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Kode Kelas</label>
                                        <input type="text" disabled="true" class="form-control" id="classCode" name="classCode" placeholder="Kode Kelas" value="{{$class->class_code}}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Nama Guru</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Nama Guru">{{$class->description}}</textarea>
                                    </div>
                                </div>
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Kelas</label>
                                        <select id="moduleCode" name="moduleCode" class="form-control">
                                            <option value="10" @if($class->module_code == '10') selected @endif>10</option>
                                            <option value="11" @if($class->module_code == '11') selected @endif>11</option>
                                            <option value="12" @if($class->module_code == '12') selected @endif>12</option>
                                            <option value="REGULER" @if($class->module_code == 'REGULER') selected @endif>REGULER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            @else
                <form action="/save-new-class" method="POST" class="w-100 d-flex flex-column">
                    @csrf
                    <div class="w-100 d-flex justify-content-center">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Kode Kelas</label>
                                        <input type="text" class="form-control" id="classCode" name="classCode"  placeholder="Kode Kelas">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Nama Guru</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Nama Guru"></textarea>
                                    </div>
                                </div>
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Kelas</label>
                                        <select id="moduleCode" name="moduleCode" class="form-control">
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="REGULER">REGULER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </main>
@endsection
