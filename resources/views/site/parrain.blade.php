@extends('layouts.app')
@section('content')
</div>
<div class="na">INSCRIPTION DU PARRAIN
</div>
<div class="deux"></div>
<div class="container">
    <div class="col">
        <div class="uk-grid uk-align-center uk-width-1-3 uk-card uk-card-default add-main ">
            @if(isset($parrain))
            <form action="{{ route('parrain.update', $parrain) }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @else
                <form action="{{ route('parrain.store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf

                    <div class="uk-margin-small">
                    <!-- <img src=" {{ asset('storage/images/logo/logo-v3.jpg') }}" alt="" width="200px" height="200px" class="add-img  uk-align-center"> -->
                    <div class="uk-grid uk-algin-center ">
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="nom" name="nom" placeholder="nom" value="{{ isset($parrain) ? $parrain->nom : old('nom') }}">
                            </div>
                            @error('nom')
                            <p> {{ $message }}</p>
                            @enderror
                       
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="prenom" name="prenom" placeholder="Prenom" value="{{ isset($parrain) ? $parrain->prenom : old('prenom') }}">
                            </div>
                            @error('prenom')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-inline">
    <span class="uk-form-icon" uk-icon="icon: calendar"></span>
    <input type="text" onfocus="(this.type= 'date')" class="uk-input" id="date_naissance" name="date_naissance" placeholder="date_naissance" value="{{ isset($parrain) ? $parrain->annee_accademique : old('date_naissance') }}">
</div>
@error('date_naissance')
<p> {{ $message }} </p>
@enderror
</div>
<!-- <div uk-form-custom="target: true">
   
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <select class="form-select" id="parrainage" name="parrainage" >
        <option value=''></option>
        @foreach($fieul as $fieul)
        <option value="{{$fieul->id}}">{{$fieul-> fieul}}</option>
        @endforeach
    </select>
                            </div>
                            </div>
                            @error('parrainage)
                            <p> {{ $message }}</p>
                            @enderror
                        </div> -->
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="pass" name="pass" placeholder="mot de passe" value="{{ isset($parrain) ? $parrain->pass : old('pass') }}">
                            </div>
                            @error('pass')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="rpass" name="rpass" placeholder=" repeter votre mot de passe" value="{{ isset($parrain) ? $parrain->rpass : old('rpass') }}">
                            </div>
                            @error('rpass')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>

                    <br /> -->
                    <div class="uk-margin">



                    </div>
                    <div class="uk-margin uk-remove-margin-top">
                        <button> <a href="{{ route('parrain.index' ) }}">
                            liste
                            </a></button>
                        <input type="submit" value="Valider" name="ajouter" class="uk-button uk-button-default uk-align-left">
                    </div>
                    <br>
                    <br>
                </form>
                <div class="trois"></div>
        </div>
    </div>




    @endsection