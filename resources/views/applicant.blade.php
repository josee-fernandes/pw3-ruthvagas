@extends('templates/base-template')
@section('current-page', 'Candidato')

<!-- Remove conteúdo da section -->
<!-- @ section('sidebar-itens', '') -->

<!-- @section('sidebar-itens')
   <li><a href="/">Home</a></li> -->
   <!-- Herdando o conteúdo já existente -->
   <!-- @parent -->
<!-- @stop -->

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="/">Home</a></li>
   <li class="breadcrumb-item active" aria-current="page">Candidato</li>
@stop

@section('main-content')
   <form method="post" action="/applicant">
      @csrf
      <div class="form-group row">
         <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Digite seu nome">
         </div>
      </div>
      <div class="form-group row">
         <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
         <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Digite seu e-mail">
         </div>
      </div>
      <div class="form-group row">
         <label for="inputTel" class="col-sm-2 col-form-label">Telefone</label>
         <div class="col-sm-10">
            <input type="tel" class="form-control" id="inputTel" name="tel" placeholder="Digite seu número de telefone">
         </div>
      </div>
      <div class="form-group row">
         <div class="col">
            <label for="inputCountry">País</label>
            <select class="form-control" id="inputCountry" name="country">
               <option selected>Brasil</option>
            </select>
         </div>
         <div class="col">
            <label for="inputState">Estado</label>
            <select class="form-control" id="inputState" name="state">
               <option selected>São Paulo</option>
            </select>
         </div>
         <div class="col">
            <label for="inputCity">Cidade</label>
            <select class="form-control" id="inputCity" name="city">
               <option selected>Santos</option>
               <option>São Vicente</option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label for="inputCareer" class="col-sm-2 col-form-label">Carreira</label>
         <div class="col-sm-10">
            <textarea class="form-control" id="inputCareer" name="career" rows="7" maxlength="255"></textarea>
         </div>
      </div>
      <div class="form-group row">
         <label for="inputStudies" class="col-sm-2 col-form-label">Estudos</label>
         <div class="col-sm-10">
            <textarea class="form-control" id="inputStudies" name="studies" rows="7" maxlength="255"></textarea>
         </div>
      </div>
      <div class="form-group row">
         <label for="inputVolunteer" class="col-sm-2 col-form-label">Voluntariado / Intercâmbio</label>
         <div class="col-sm-10">
            <textarea class="form-control" id="inputVolunteer" name="volunteer" rows="7" maxlength="255"></textarea>
         </div>
      </div>
      <div class="form-group row">
         <div class="col">
            <label for="inputPortuguese">Português</label>
            <select class="form-control" id="inputPortuguese" name="portuguese_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>
         </div>
         <div class="col">
            <label for="inputEnglish">Inglês</label>
            <select class="form-control" id="inputEnglish" name="english_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>
         </div>
         <div class="col">
            <label for="inputSpanish">Espanhol</label>
            <select class="form-control" id="inputSpanish" name="spanish_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>   
         </div>
      </div>
      <div class="form-group row">
         <div class="col">
            <label for="inputChinese">Chinês</label>
            <select class="form-control" id="inputChinese" name="chinese_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>
         </div>
         <div class="col">
            <label for="inputFrench">Francês</label>
            <select class="form-control" id="inputFrench" name="french_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>
         </div>
         <div class="col">
            <label for="inputGerman">Alemão</label>
            <select class="form-control" id="inputGerman" name="german_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>
         </div>
      </div>
      <div class="form-group row justify-content-md-center">
         <div class="col-4">
            <label for="inputJapanese">Japonês</label>
            <select class="form-control" id="inputJapanese" name="japanese_level">
               <option value="none" selected>Não conheço</option>
               <option value="basic">Básico</option>
               <option value="medium">Intermediário</option>
               <option value="advanced">Avançado</option>
               <option value="native">Fluente</option>
            </select>
         </div>
      </div>
      <div class="row justify-content-md-center my-5">
         <button type="submit" class="btn btn-primary">Candidatar-se</button>
      </div>
   </form>
@stop