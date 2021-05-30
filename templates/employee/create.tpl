<!--{include file="employee/header.tpl"}-->
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <form action="https://localhost/crud_smarty/employee/create" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Sobrenome</label>
          <input name='lastname' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nascimento</label>
          <input name='born_at' type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Equipe/Turno</label>
          <input name='team_id' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Remuneração</label>
          <input name='salary' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
</div>
