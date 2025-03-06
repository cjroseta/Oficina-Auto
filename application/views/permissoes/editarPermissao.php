<?php $permissoes = unserialize($result->permissoes);?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Editar Permissão</h3>
                </div>
                <hr class="m-0-0">
                
                <form action="<?php echo base_url(); ?>index.php/permissoes/editar" id="formPermissao" method="post">
                <div class="form-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nome" class="control-label col-md-4 text-right">Nome da Permissão<span class="required text-danger">*</span></label>

                                <div class="col-md-8">
                                    <input type="text" id="nome" class="form-control" name="nome" value="<?php echo $result->nome; ?>" />
                                    <input type="hidden" name="idPermissao" value="<?php echo $result->idPermissao; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="nome" class="control-label col-md-4 text-right">Situação</label>

                                <select name="situacao" id="situacao" class="col-md-8">
                                    <?php if ($result->situacao == 1) {
                                        $sim = 'selected';
                                        $nao ='';
                                    } else {
                                        $sim = '';
                                        $nao ='selected';
                                    }?>
                                    <option value="1" <?php echo $sim;?>>Ativo</option>
                                    <option value="0" <?php echo $nao;?>>Inativo</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="marcarTodos">
                                <label class="custom-control-label" for="marcarTodos">Marcar Todos</label>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#contacts" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-street-view text-cyan" data-toggle="tooltip"></i> Contactos</h4>
                                    </a>
                                    <div class="m-t-15 well" id="contacts" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vContact'])) { if ($permissoes['vContact'] == '1'){ echo 'checked'; }} ?> name="vContact" type="checkbox" class="custom-control-input" id="vContact" value="1" />
                                                            <label class="custom-control-label" for="vContact">Visualizar Contacto</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aContact'])) { if ($permissoes['aContact'] == '1'){ echo 'checked'; }} ?> name="aContact" type="checkbox" class="custom-control-input" id="aContact" value="1" />
                                                            <label class="custom-control-label" for="aContact">Adicionar Contacto</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eContact'])) { if ($permissoes['eContact'] == '1'){ echo 'checked'; }} ?> name="eContact" type="checkbox" class="custom-control-input" id="eContact" value="1" />
                                                            <label class="custom-control-label" for="eContact">Editar Contacto</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eContact'])) { if ($permissoes['eContact'] == '1'){ echo 'checked'; }} ?> name="dContact" type="checkbox" class="custom-control-input" id="dContact" value="1" />
                                                            <label class="custom-control-label" for="dContact">Excluir Contacto</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Contacts-->

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#fornecedores" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-dolly text-cyan" data-toggle="tooltip"></i> Fornecedores</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="fornecedores" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vFornecedor'])) { if ($permissoes['vFornecedor'] == '1'){ echo 'checked'; }} ?> name="vFornecedor" type="checkbox" class="custom-control-input" id="vFornecedor" value="1" />
                                                            <label class="custom-control-label" for="vFornecedor">Visualizar Fornecedor</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aFornecedor'])) { if ($permissoes['aFornecedor'] == '1'){ echo 'checked'; }} ?> name="aFornecedor" type="checkbox" class="custom-control-input" id="aFornecedor" value="1" />
                                                            <label class="custom-control-label" for="aFornecedor">Adicionar Fornecedor</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eFornecedor'])) { if ($permissoes['eFornecedor'] == '1'){ echo 'checked'; }} ?> name="eFornecedor" type="checkbox" class="custom-control-input" id="eFornecedor" value="1" />
                                                            <label class="custom-control-label" for="eFornecedor">Editar Fornecedor</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dFornecedor'])) { if ($permissoes['dFornecedor'] == '1'){ echo 'checked'; }} ?> name="dFornecedor" type="checkbox" class="custom-control-input" id="dFornecedor" value="1" />
                                                            <label class="custom-control-label" for="dFornecedor">Excluir Fornecedor</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Fornecedores-->

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#viaturas" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-car text-cyan" data-toggle="tooltip"></i> Viaturas</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="viaturas" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vViatura'])) { if ($permissoes['vViatura'] == '1'){ echo 'checked'; }} ?> name="vViatura" type="checkbox" class="custom-control-input" id="vViatura" value="1" />
                                                            <label class="custom-control-label" for="vViatura">Visualizar Viatura</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aViatura'])) { if ($permissoes['aViatura'] == '1'){ echo 'checked'; }} ?> name="aViatura" type="checkbox" class="custom-control-input" id="aViatura" value="1" />
                                                            <label class="custom-control-label" for="aViatura">Adicionar Viatura</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eViatura'])) { if ($permissoes['eViatura'] == '1'){ echo 'checked'; }} ?> name="eViatura" type="checkbox" class="custom-control-input" id="eViatura" value="1" />
                                                            <label class="custom-control-label" for="eViatura">Editar Viatura</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dViatura'])) { if ($permissoes['dViatura'] == '1'){ echo 'checked'; }} ?> name="dViatura" type="checkbox" class="custom-control-input" id="dViatura" value="1" />
                                                            <label class="custom-control-label" for="dViatura">Excluir Serviço</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Viaturas-->

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#garantias" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="far fa-calendar-times text-cyan" data-toggle="tooltip"></i> Garantias</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="garantias" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vGarantia'])) { if ($permissoes['vGarantia'] == '1'){ echo 'checked'; }} ?> name="vGarantia" type="checkbox" class="custom-control-input" id="vGarantia" value="1" />
                                                            <label class="custom-control-label" for="vGarantia">Visualizar Garantia</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aGarantia'])) { if ($permissoes['aGarantia'] == '1'){ echo 'checked'; }} ?> name="aGarantia" type="checkbox" class="custom-control-input" id="aGarantia" value="1" />
                                                            <label class="custom-control-label" for="aGarantia">Adicionar Garantia</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eGarantia'])) { if ($permissoes['eGarantia'] == '1'){ echo 'checked'; }} ?> name="eGarantia" type="checkbox" class="custom-control-input" id="eGarantia" value="1" />
                                                            <label class="custom-control-label" for="eGarantia">Editar Garantia</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dGarantia'])) { if ($permissoes['dGarantia'] == '1'){ echo 'checked'; }} ?> name="dGarantia" type="checkbox" class="custom-control-input" id="dGarantia" value="1" />
                                                            <label class="custom-control-label" for="dGarantia">Excluir Garantia</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                
                                <!--/Garantias-->

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#jobCard" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-edit text-cyan" data-toggle="tooltip"></i> Job Card</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="jobCard" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vJc'])) { if ($permissoes['vJc'] == '1'){ echo 'checked'; }} ?> name="vJc" type="checkbox" class="custom-control-input" id="vJc" value="1" />
                                                            <label class="custom-control-label" for="vJc">Visualizar Job Card</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aJc'])) { if ($permissoes['aJc'] == '1'){ echo 'checked'; }} ?> name="aJc" type="checkbox" class="custom-control-input" id="aJc" value="1" />
                                                            <label class="custom-control-label" for="aJc">Adicionar Job Card</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eJc'])) { if ($permissoes['eJc'] == '1'){ echo 'checked'; }} ?> name="eJc" type="checkbox" class="custom-control-input" id="eJc" value="1" />
                                                            <label class="custom-control-label" for="eJc">Editar Job Card</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dJc'])) { if ($permissoes['dJc'] == '1'){ echo 'checked'; }} ?> name="dJc" type="checkbox" class="custom-control-input" id="dJc" value="1" />
                                                            <label class="custom-control-label" for="dJc">Excluir Job Card</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Job Card-->

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#compras" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-shopping-bag text-cyan" data-toggle="tooltip"></i> Compras</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="compras" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vCompra'])) { if ($permissoes['vCompra'] == '1'){ echo 'checked'; }} ?> name="vCompra" type="checkbox" class="custom-control-input" id="vCompra" value="1" />
                                                            <label class="custom-control-label" for="vCompra">Visualizar Compra</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aCompra'])) { if ($permissoes['aCompra'] == '1'){ echo 'checked'; }} ?> name="aCompra" type="checkbox" class="custom-control-input" id="aCompra" value="1" />
                                                            <label class="custom-control-label" for="aCompra">Adicionar Compra</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eCompra'])) { if ($permissoes['eCompra'] == '1'){ echo 'checked'; }} ?> name="eCompra" type="checkbox" class="custom-control-input" id="eCompra" value="1" />
                                                            <label class="custom-control-label" for="eCompra">Editar Compra</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dCompra'])) { if ($permissoes['dCompra'] == '1'){ echo 'checked'; }} ?> name="dCompra" type="checkbox" class="custom-control-input" id="dCompra" value="1" />
                                                            <label class="custom-control-label" for="dCompra">Excluir Compra</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Compras--> 

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#financeiros" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-hand-holding-usd text-cyan" data-toggle="tooltip"></i> Financeiro</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="financeiros" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vLancamento'])) { if ($permissoes['vLancamento'] == '1'){ echo 'checked'; }} ?> name="vLancamento" type="checkbox" class="custom-control-input" id="vLancamento" value="1" />
                                                            <label class="custom-control-label" for="vLancamento">Visualizar Lançamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vLancamento'])) { if ($permissoes['vLancamento'] == '1'){ echo 'checked'; }} ?> name="aLancamento" type="checkbox" class="custom-control-input" id="aLancamento" value="1" />
                                                            <label class="custom-control-label" for="aLancamento">Adicionar Lançamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vLancamento'])) { if ($permissoes['vLancamento'] == '1'){ echo 'checked'; }} ?> name="eLancamento" type="checkbox" class="custom-control-input" id="eLancamento" value="1" />
                                                            <label class="custom-control-label" for="eLancamento">Editar Lançamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vLancamento'])) { if ($permissoes['vLancamento'] == '1'){ echo 'checked'; }} ?> name="dLancamento" type="checkbox" class="custom-control-input" id="dLancamento" value="1" />
                                                            <label class="custom-control-label" for="dLancamento">Excluir Lançamento</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vPagamento'])) { if ($permissoes['vPagamento'] == '1'){ echo 'checked'; }} ?> name="vPagamento" type="checkbox" class="custom-control-input" id="vPagamento" value="1" />
                                                            <label class="custom-control-label" for="vPagamento">Visualizar Pagamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aPagamento'])) { if ($permissoes['aPagamento'] == '1'){ echo 'checked'; }} ?> name="aPagamento" type="checkbox" class="custom-control-input" id="aPagamento" value="1" />
                                                            <label class="custom-control-label" for="aPagamento">Adicionar Pagamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['ePagamento'])) { if ($permissoes['ePagamento'] == '1'){ echo 'checked'; }} ?> name="ePagamento" type="checkbox" class="custom-control-input" id="ePagamento" value="1" />
                                                            <label class="custom-control-label" for="ePagamento">Editar Pagamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dPagamento'])) { if ($permissoes['dPagamento'] == '1'){ echo 'checked'; }} ?> name="dPagamento" type="checkbox" class="custom-control-input" id="dPagamento" value="1" />
                                                            <label class="custom-control-label" for="dPagamento">Excluir Pagamento</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Financeiro-->

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#relatorios" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-chart-line text-cyan" data-toggle="tooltip"></i> Relatórios</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="relatorios" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eRelatorio'])) { if ($permissoes['eRelatorio'] == '1'){ echo 'checked'; }} ?> name="eRelatorio" type="checkbox" class="custom-control-input" id="eRelatorio" value="1" />
                                                            <label class="custom-control-label" for="eRelatorio">Nav Relatórios</label>
                                                        </div>
                                                    </td>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rContact'])) { if ($permissoes['rContact'] == '1'){ echo 'checked'; }} ?> name="rContact" type="checkbox" class="custom-control-input" id="rContact" value="1" />
                                                            <label class="custom-control-label" for="rContact">Rel. Contactos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rServico'])) { if ($permissoes['rServico'] == '1'){ echo 'checked'; }} ?> name="rServico" type="checkbox" class="custom-control-input" id="rServico" value="1" />
                                                            <label class="custom-control-label" for="rServico">Rel. Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rJc'])) { if ($permissoes['rJc'] == '1'){ echo 'checked'; }} ?> name="rJc" type="checkbox" class="custom-control-input" id="rJc" value="1" />
                                                            <label class="custom-control-label" for="rJc">Rel. Job Card</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>   
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rProduto'])) { if ($permissoes['rProduto'] == '1'){ echo 'checked'; }} ?> name="rProduto" type="checkbox" class="custom-control-input" id="rProduto" value="1" />
                                                            <label class="custom-control-label" for="rProduto">Rel. Producto</label>
                                                        </div>
                                                    </td>                                         
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rVenda'])) { if ($permissoes['rVenda'] == '1'){ echo 'checked'; }} ?> name="rVenda" type="checkbox" class="custom-control-input" id="rVenda" value="1" />
                                                            <label class="custom-control-label" for="rVenda">Rel. Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rFinanceiro'])) { if ($permissoes['rFinanceiro'] == '1'){ echo 'checked'; }} ?> name="rFinanceiro" type="checkbox" class="custom-control-input" id="rFinanceiro" value="1" />
                                                            <label class="custom-control-label" for="rFinanceiro">Rel. Financeiro</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rEntrada'])) { if ($permissoes['rEntrada'] == '1'){ echo 'checked'; }} ?> name="rEntrada" type="checkbox" class="custom-control-input" id="rEntrada" value="1" />
                                                            <label class="custom-control-label" for="rEntrada">Rel. Entrada</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rSaida'])) { if ($permissoes['rSaida'] == '1'){ echo 'checked'; }} ?> name="rSaida" type="checkbox" class="custom-control-input" id="rSaida" value="1" />
                                                            <label class="custom-control-label" for="rSaida">Rel. Saída</label>
                                                        </div>
                                                    </td>                                               
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rCompra'])) { if ($permissoes['rCompra'] == '1'){ echo 'checked'; }} ?> name="rCompra" type="checkbox" class="custom-control-input" id="rCompra" value="1" />
                                                            <label class="custom-control-label" for="rCompra">Rel. Compras</label>
                                                        </div>
                                                    </td>                                                   
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rViatura'])) { if ($permissoes['rViatura'] == '1'){ echo 'checked'; }} ?> name="rViatura" type="checkbox" class="custom-control-input" id="rViatura" value="1" />
                                                            <label class="custom-control-label" for="rViatura">Rel. Viatura</label>
                                                        </div>
                                                    </td>   
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rFornecedor'])) { if ($permissoes['rFornecedor'] == '1'){ echo 'checked'; }} ?> name="rFornecedor" type="checkbox" class="custom-control-input" id="rFornecedor" value="1" />
                                                            <label class="custom-control-label" for="rFornecedor">Rel. Fornecedor</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>   
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rTecnico'])) { if ($permissoes['rTecnico'] == '1'){ echo 'checked'; }} ?> name="rTecnico" type="checkbox" class="custom-control-input" id="rTecnico" value="1" />
                                                            <label class="custom-control-label" for="rTecnico">Rel. Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['rCotacao'])) { if ($permissoes['rCotacao'] == '1'){ echo 'checked'; }} ?> name="rCotacao" type="checkbox" class="custom-control-input" id="rCotacao" value="1" />
                                                            <label class="custom-control-label" for="rCotacao">Rel. Cotações</label>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Relatórios-->

                            </div> 
                            <!--/row-->
                        </div>

                        <div class="col-md-6">
                            <div class="row">                                
                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#produtos" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-cubes text-cyan" data-toggle="tooltip"></i> Productos</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="produtos" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vProduto'])) { if ($permissoes['vProduto'] == '1'){ echo 'checked'; }} ?> name="vProduto" type="checkbox" class="custom-control-input" id="vProduto" value="1" />
                                                            <label class="custom-control-label" for="vProduto">Visualizar Productos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aProduto'])) { if ($permissoes['aProduto'] == '1'){ echo 'checked'; }} ?> name="aProduto" type="checkbox" class="custom-control-input" id="aProduto" value="1" />
                                                            <label class="custom-control-label" for="aProduto">Adicionar Productos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eProduto'])) { if ($permissoes['eProduto'] == '1'){ echo 'checked'; }} ?> name="eProduto" type="checkbox" class="custom-control-input" id="eProduto" value="1" />
                                                            <label class="custom-control-label" for="eProduto">Editar Productos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dProduto'])) { if ($permissoes['dProduto'] == '1'){ echo 'checked'; }} ?> name="dProduto" type="checkbox" class="custom-control-input" id="dProduto" value="1" />
                                                            <label class="custom-control-label" for="dProduto">Excluir Productos</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Productos-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#servicos" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-wrench text-cyan" data-toggle="tooltip"></i> Serviços</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="servicos" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vServico'])) { if ($permissoes['vServico'] == '1'){ echo 'checked'; }} ?> name="vServico" type="checkbox" class="custom-control-input" id="vServico" value="1" />
                                                            <label class="custom-control-label" for="vServico">Visualizar Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aServico'])) { if ($permissoes['aServico'] == '1'){ echo 'checked'; }} ?> name="aServico" type="checkbox" class="custom-control-input" id="aServico" value="1" />
                                                            <label class="custom-control-label" for="aServico">Adicionar Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eServico'])) { if ($permissoes['eServico'] == '1'){ echo 'checked'; }} ?> name="eServico" type="checkbox" class="custom-control-input" id="eServico" value="1" />
                                                            <label class="custom-control-label" for="eServico">Editar Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dServico'])) { if ($permissoes['dServico'] == '1'){ echo 'checked'; }} ?> name="dServico" type="checkbox" class="custom-control-input" id="dServico" value="1" />
                                                            <label class="custom-control-label" for="dServico">Excluir Serviço</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Serviços-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#tecnicos" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-users text-cyan" data-toggle="tooltip"></i> Técnicos</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="tecnicos" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vTecnico'])) { if ($permissoes['vTecnico'] == '1'){ echo 'checked'; }} ?> name="vTecnico" type="checkbox" class="custom-control-input" id="vTecnico" value="1" />
                                                            <label class="custom-control-label" for="vTecnico">Visualizar Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aTecnico'])) { if ($permissoes['aTecnico'] == '1'){ echo 'checked'; }} ?> name="aTecnico" type="checkbox" class="custom-control-input" id="aTecnico" value="1" />
                                                            <label class="custom-control-label" for="aTecnico">Adicionar Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eTecnico'])) { if ($permissoes['eTecnico'] == '1'){ echo 'checked'; }} ?> name="eTecnico" type="checkbox" class="custom-control-input" id="eTecnico" value="1" />
                                                            <label class="custom-control-label" for="eTecnico">Editar Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dTecnico'])) { if ($permissoes['dTecnico'] == '1'){ echo 'checked'; }} ?> name="dTecnico" type="checkbox" class="custom-control-input" id="dTecnico" value="1" />
                                                            <label class="custom-control-label" for="dTecnico">Excluir Técnico</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Técnicos-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#arquivos" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-archive text-cyan" data-toggle="tooltip"></i> Arquivos</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="arquivos" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vArquivo'])) { if ($permissoes['vArquivo'] == '1'){ echo 'checked'; }} ?> name="vArquivo" type="checkbox" class="custom-control-input" id="vArquivo" value="1" />
                                                            <label class="custom-control-label" for="vArquivo">Visualizar Arquivo</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aArquivo'])) { if ($permissoes['aArquivo'] == '1'){ echo 'checked'; }} ?> name="aArquivo" type="checkbox" class="custom-control-input" id="aArquivo" value="1" />
                                                            <label class="custom-control-label" for="aArquivo">Adicionar Arquivo</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eArquivo'])) { if ($permissoes['eArquivo'] == '1'){ echo 'checked'; }} ?> name="eArquivo" type="checkbox" class="custom-control-input" id="eArquivo" value="1" />
                                                            <label class="custom-control-label" for="eArquivo">Editar Arquivo</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dArquivo'])) { if ($permissoes['dArquivo'] == '1'){ echo 'checked'; }} ?> name="dArquivo" type="checkbox" class="custom-control-input" id="dArquivo" value="1" />
                                                            <label class="custom-control-label" for="dArquivo">Excluir Arquivo</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Arquivos-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#vendas" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-shopping-cart text-cyan" data-toggle="tooltip"></i> Vendas</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="vendas" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vVenda'])) { if ($permissoes['vVenda'] == '1'){ echo 'checked'; }} ?> name="vVenda" type="checkbox" class="custom-control-input" id="vVenda" value="1" />
                                                            <label class="custom-control-label" for="vVenda">Visualizar Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aVenda'])) { if ($permissoes['aVenda'] == '1'){ echo 'checked'; }} ?> name="aVenda" type="checkbox" class="custom-control-input" id="aVenda" value="1" />
                                                            <label class="custom-control-label" for="aVenda">Adicionar Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eVenda'])) { if ($permissoes['eVenda'] == '1'){ echo 'checked'; }} ?> name="eVenda" type="checkbox" class="custom-control-input" id="eVenda" value="1" />
                                                            <label class="custom-control-label" for="eVenda">Editar Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dVenda'])) { if ($permissoes['dVenda'] == '1'){ echo 'checked'; }} ?> name="dVenda" type="checkbox" class="custom-control-input" id="dVenda" value="1" />
                                                            <label class="custom-control-label" for="dVenda">Excluir Venda</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                
                                <!--/Vendas-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#cotacoes" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="far fa-window-restore text-cyan" data-toggle="tooltip"></i> Cotações</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="cotacoes" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vCotacao'])) { if ($permissoes['vCotacao'] == '1'){ echo 'checked'; }} ?> name="vCotacao" type="checkbox" class="custom-control-input" id="vCotacao" value="1" />
                                                            <label class="custom-control-label" for="vCotacao">Visualizar Cotação</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aCotacao'])) { if ($permissoes['aCotacao'] == '1'){ echo 'checked'; }} ?> name="aCotacao" type="checkbox" class="custom-control-input" id="aCotacao" value="1" />
                                                            <label class="custom-control-label" for="aCotacao">Adicionar Cotação</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eCotacao'])) { if ($permissoes['eCotacao'] == '1'){ echo 'checked'; }} ?> name="eCotacao" type="checkbox" class="custom-control-input" id="eCotacao" value="1" />
                                                            <label class="custom-control-label" for="eCotacao">Editar Cotação</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dCotacao'])) { if ($permissoes['dCotacao'] == '1'){ echo 'checked'; }} ?> name="dCotacao" type="checkbox" class="custom-control-input" id="dCotacao" value="1" />
                                                            <label class="custom-control-label" for="dCotacao">Excluir Cotação</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Cotações-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#cobrancas" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="far fa-calendar-check text-cyan" data-toggle="tooltip"></i> Cobranças</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="cobrancas" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['vCobranca'])) { if ($permissoes['vCobranca'] == '1'){ echo 'checked'; }} ?> name="vCobranca" type="checkbox" class="custom-control-input" id="vCobranca" value="1" />
                                                            <label class="custom-control-label" for="vCobranca">Visualizar Cobrança</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['aCobranca'])) { if ($permissoes['aCobranca'] == '1'){ echo 'checked'; }} ?> name="aCobranca" type="checkbox" class="custom-control-input" id="aCobranca" value="1" />
                                                            <label class="custom-control-label" for="aCobranca">Adicionar Cobrança</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['eCobranca'])) { if ($permissoes['eCobranca'] == '1'){ echo 'checked'; }} ?> name="eCobranca" type="checkbox" class="custom-control-input" id="eCobranca" value="1" />
                                                            <label class="custom-control-label" for="eCobranca">Editar Cobrança</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['dCobranca'])) { if ($permissoes['dCobranca'] == '1'){ echo 'checked'; }} ?> name="dCobranca" type="checkbox" class="custom-control-input" id="dCobranca" value="1" />
                                                            <label class="custom-control-label" for="dCobranca">Excluir Cobrança</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Cobranças-->

                                <div class="col-md-12 ml-1 mb-1 bord-permis">
                                    <a href="#configuracoes" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="far fa-sun text-cyan" data-toggle="tooltip"></i> Configurações</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="configuracoes" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>   
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cConfiguracoes'])) { if ($permissoes['cConfiguracoes'] == '1'){ echo 'checked'; }} ?> name="cConfiguracoes" type="checkbox" class="custom-control-input" id="cConfiguracoes" value="1" />
                                                            <label class="custom-control-label" for="cConfiguracoes">Nav Configurações</label>
                                                        </div>
                                                    </td>                                         
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cUsuario'])) { if ($permissoes['cUsuario'] == '1'){ echo 'checked'; }} ?> name="cUsuario" type="checkbox" class="custom-control-input" id="cUsuario" value="1" />
                                                            <label class="custom-control-label" for="cUsuario">Configurar Usuário</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cEmpresa'])) { if ($permissoes['cEmpresa'] == '1'){ echo 'checked'; }} ?> name="cEmpresa" type="checkbox" class="custom-control-input" id="cEmpresa" value="1" />
                                                            <label class="custom-control-label" for="cEmpresa">Configurar Empresa</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cPermissao'])) { if ($permissoes['cPermissao'] == '1'){ echo 'checked'; }} ?> name="cPermissao" type="checkbox" class="custom-control-input" id="cPermissao" value="1" />
                                                            <label class="custom-control-label" for="cPermissao">Configurar Permissões</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>      
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cBackup'])) { if ($permissoes['cBackup'] == '1'){ echo 'checked'; }} ?> name="cBackup" type="checkbox" class="custom-control-input" id="cBackup" value="1" />
                                                            <label class="custom-control-label" for="cBackup">Backup</label>
                                                        </div>
                                                    </td>                                      
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cAuditoria'])) { if ($permissoes['cAuditoria'] == '1'){ echo 'checked'; }} ?> name="cAuditoria" type="checkbox" class="custom-control-input" id="cAuditoria" value="1" />
                                                            <label class="custom-control-label" for="cAuditoria">Auditoria</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cEmail'])) { if ($permissoes['cEmail'] == '1'){ echo 'checked'; }} ?> name="cEmail" type="checkbox" class="custom-control-input" id="cEmail" value="1" />
                                                            <label class="custom-control-label" for="cEmail">Email</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input <?php if (isset($permissoes ['cSistema'])) { if ($permissoes['cSistema'] == '1'){ echo 'checked'; }} ?> name="cSistema" type="checkbox" class="custom-control-input" id="cSistema" value="1" />
                                                            <label class="custom-control-label" for="cSistema">Sistema</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/Configurações-->
                            </div>
                            <!--/row-->
                        </div>
                    </div>

                </div>
                <!--Card body-->

                <div class="form-actions bg-info-l card-bord-r-b">
                    <div class="text-center p-25">
                        
                        <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 p-r-10">Actualizar</span></button>

                        <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/permissoes"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Voltar</span></a>

                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#marcarTodos").change(function() {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });
        $("#formPermissao").validate({
            rules: {
                nome: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: 'Campo obrigatório'
                }
            }
        });
    });
</script>
