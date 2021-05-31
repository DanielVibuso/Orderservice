<!--{include file="employee/header.tpl"}-->
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="inputEmail4"  value='<!--{$employee.name}-->'>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Sobrenome</label>
            <input type="text" class="form-control" id="inputPassword4" value="<!--{$employee.lastname}-->">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Nascimento</label>
          <input type="text" class="form-control" id="inputAddress" value="<!--{$employee.born_at}-->">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Time</label>
          <input type="text" class="form-control" id="inputAddress2" value="<!--{$employee.team_id}-->">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Salário</label>
            <input type="text" class="form-control" id="inputCity" value="<!--{$employee.salary}-->">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </div>
</div>
