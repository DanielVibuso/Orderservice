<!--{include file="employee/header.tpl"}-->
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Time</th>
            <th scope="col">Salário</th>
            <th scope="col">Editar<th>
          </tr>
        </thead>
        <tbody>
          <!--{foreach from=$employees key=chave item=value}-->
           <tr>
            <th><!--{$value.id}--></th>
            <th><!--{$value.name}--></th>
            <td><!--{$value.lastname}--></td>
            <td><!--{$value.born_at}--></td>
            <td><!--{$value.team_id}--></td>
            <td><!--{$value.salary}--></td>
            <td><a href="http://localhost/crud_smarty/employee/showEmployeePage/<!--{$value.id}-->">Visualizar</a></td>
          </tr>
          <!--{/foreach}-->
        </tbody>
      </table>
    </div>
  </div>
</div>
