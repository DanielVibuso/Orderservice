<!--{include file="index/header.tpl"}-->
<!--{config_load file="index/install.conf"}-->
<title><!--{#pageTitle#}--></title>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Login fornecido pelo Desenvolvedor</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha fornecida pelo Desenvolvedor</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Instalar sistema</button>
      </form>
    </div>
  </div>
</div>
