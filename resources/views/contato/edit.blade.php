@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contato</div>
                <form action="{{ url('contatos/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf

                        <div class="form-group">
                            <label for="name">Nome completo</label>
                            <input type="text" required class="form-control{{$errors->has('name') ? ' is-invalid':''}}" value="{{ old('name', $data->name) }}" id="name" name="name">
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="text" required class="form-control{{$errors->has('phone') ? ' is-invalid':''}}" value="{{ old('phone', $data->phone) }}" id="phone" name="phone">
                            <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="mail">E-mail</label>
                            <input type="mail" class="form-control{{$errors->has('mail') ? ' is-invalid':''}}" value="{{ old('mail', $data->mail) }}" id="mail" name="mail" placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('mail') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="address">Endereço</label>
                            <input type="text" class="form-control{{$errors->has('address') ? ' is-invalid':''}}" id="address" value="{{ old('address', $data->address ) }}" name="address" placeholder="Endereço">
                            <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="number">Número</label>
                            <input type="text" class="form-control{{$errors->has('number') ? ' is-invalid':''}}" id="number" value="{{ old('number', $data->number) }}" name="number" placeholder="Número">
                            <div class="invalid-feedback">{{ $errors->first('number') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="neighborhood">Bairro</label>
                            <input type="text" class="form-control{{$errors->has('neighborhood') ? ' is-invalid':''}}" id="neighborhood" value="{{ old('neighborhood', $data->neighborhood) }}" name="neighborhood" placeholder="Bairro">
                            <div class="invalid-feedback">{{ $errors->first('neighborhood') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control{{$errors->has('city') ? ' is-invalid':''}}" id="city" value="{{ old('city', $data->city) }}" name="city" placeholder="Cidade">
                            <div class="invalid-feedback">{{ $errors->first('city') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <select class="form-control{{$errors->has('state') ? ' is-invalid':''}}" id="state" value="{{ old('state', $data->state) }}" name="state" aria-label="Default select example">
                                <option selected>Estado</option>
                                @foreach ($states as $state)
                                <option value=""{{ old('state', $state->letter) == $data->state ? ' selected' : ''}}>{{$state->title}}</option>
                                @endforeach
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="zip">CEP</label>
                            <input type="text" class="form-control{{$errors->has('zip') ? ' is-invalid':''}}" id="zip" value="{{ old('zip', $data->zip) }}" name="zip" placeholder="CEP">
                            <div class="invalid-feedback">{{ $errors->first('zip') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control-file{{$errors->has('avatar') ? ' is-invalid':''}}" id="avatar" name="avatar" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('avatar') }}</div>
                            <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
