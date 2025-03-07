<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Permissão</h3>
                </div>
                <hr class="m-0-0">
                
                <form action="<?php echo base_url(); ?>index.php/permissoes/adicionar" id="formPermissao" method="post">
                <div class="form-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nome" class="control-label col-md-4 text-right">Nome da Permissão<span class="required text-danger">*</span></label>

                                <div class="col-md-8">
                                    <input type="text" id="nome" class="form-control" name="nome" />
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="marcarTodos" value="1" />
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
                                                            <input name="vContact" checked="checked" type="checkbox" class="custom-control-input" id="vContact" value="1" />
                                                            <label class="custom-control-label" for="vContact">Visualizar Contacto</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aContact" type="checkbox" class="custom-control-input" id="aContact" value="1" />
                                                            <label class="custom-control-label" for="aContact">Adicionar Contacto</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eContact" type="checkbox" class="custom-control-input" id="eContact" value="1" />
                                                            <label class="custom-control-label" for="eContact">Editar Contacto</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dContact" type="checkbox" class="custom-control-input" id="dContact" value="1" />
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
                                                            <input name="vFornecedor" checked="checked" type="checkbox" class="custom-control-input" id="vFornecedor" value="1" />
                                                            <label class="custom-control-label" for="vFornecedor">Visualizar Fornecedor</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aFornecedor" type="checkbox" class="custom-control-input" id="aFornecedor" value="1" />
                                                            <label class="custom-control-label" for="aFornecedor">Adicionar Fornecedor</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eFornecedor" type="checkbox" class="custom-control-input" id="eFornecedor" value="1" />
                                                            <label class="custom-control-label" for="eFornecedor">Editar Fornecedor</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dFornecedor" type="checkbox" class="custom-control-input" id="dFornecedor" value="1" />
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
                                                            <input name="vViatura" checked="checked" type="checkbox" class="custom-control-input" id="vViatura" value="1" />
                                                            <label class="custom-control-label" for="vViatura">Visualizar Viatura</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aViatura" type="checkbox" class="custom-control-input" id="aViatura" value="1" />
                                                            <label class="custom-control-label" for="aViatura">Adicionar Viatura</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eViatura" type="checkbox" class="custom-control-input" id="eViatura" value="1" />
                                                            <label class="custom-control-label" for="eViatura">Editar Viatura</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dViatura" type="checkbox" class="custom-control-input" id="dViatura" value="1" />
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
                                                            <input name="vGarantia" checked="checked" type="checkbox" class="custom-control-input" id="vGarantia" value="1" />
                                                            <label class="custom-control-label" for="vGarantia">Visualizar Garantia</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aGarantia" type="checkbox" class="custom-control-input" id="aGarantia" value="1" />
                                                            <label class="custom-control-label" for="aGarantia">Adicionar Garantia</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eGarantia" type="checkbox" class="custom-control-input" id="eGarantia" value="1" />
                                                            <label class="custom-control-label" for="eGarantia">Editar Garantia</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dGarantia" type="checkbox" class="custom-control-input" id="dGarantia" value="1" />
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
                                                            <input name="vJc" checked="checked" type="checkbox" class="custom-control-input" id="vJc" value="1" />
                                                            <label class="custom-control-label" for="vJc">Visualizar Job Card</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aJc" type="checkbox" class="custom-control-input" id="aJc" value="1" />
                                                            <label class="custom-control-label" for="aJc">Adicionar Job Card</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eJc" type="checkbox" class="custom-control-input" id="eJc" value="1" />
                                                            <label class="custom-control-label" for="eJc">Editar Job Card</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dJc" type="checkbox" class="custom-control-input" id="dJc" value="1" />
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
                                    <a href="#purchases" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-shopping-bag text-cyan" data-toggle="tooltip"></i> Compras</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="purchases" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="vPurchase" checked="checked" type="checkbox" class="custom-control-input" id="vPurchase" value="1" />
                                                            <label class="custom-control-label" for="vPurchase">Visualizar Compra</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aPurchase" type="checkbox" class="custom-control-input" id="aPurchase" value="1" />
                                                            <label class="custom-control-label" for="aPurchase">Adicionar Compra</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="ePurchase" type="checkbox" class="custom-control-input" id="ePurchase" value="1" />
                                                            <label class="custom-control-label" for="ePurchase">Editar Compra</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dPurchase" type="checkbox" class="custom-control-input" id="dPurchase" value="1" />
                                                            <label class="custom-control-label" for="dPurchase">Excluir Compra</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                
                                <!--/Purchases--> 

                                <div class="col-md-12 mb-1 bord-permis">
                                    <a href="#po" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-shopping-bag text-cyan" data-toggle="tooltip"></i> Ordens de Compra</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="po" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="vPO" checked="checked" type="checkbox" class="custom-control-input" id="vPO" value="1" />
                                                            <label class="custom-control-label" for="vPO">Visualizar PO</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aPO" type="checkbox" class="custom-control-input" id="aPO" value="1" />
                                                            <label class="custom-control-label" for="aPO">Adicionar PO</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="ePO" type="checkbox" class="custom-control-input" id="ePO" value="1" />
                                                            <label class="custom-control-label" for="ePO">Editar PO</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dPO" type="checkbox" class="custom-control-input" id="dPO" value="1" />
                                                            <label class="custom-control-label" for="dPO">Excluir PO</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                
                                <!--/Purchases Order--> 

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
                                                            <input name="vLancamento" type="checkbox" class="custom-control-input" id="vLancamento" value="1" />
                                                            <label class="custom-control-label" for="vLancamento">Visualizar Lançamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aLancamento" type="checkbox" class="custom-control-input" id="aLancamento" value="1" />
                                                            <label class="custom-control-label" for="aLancamento">Adicionar Lançamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eLancamento" type="checkbox" class="custom-control-input" id="eLancamento" value="1" />
                                                            <label class="custom-control-label" for="eLancamento">Editar Lançamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dLancamento" type="checkbox" class="custom-control-input" id="dLancamento" value="1" />
                                                            <label class="custom-control-label" for="dLancamento">Excluir Lançamento</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="vPagamento" type="checkbox" class="custom-control-input" id="vPagamento" value="1" />
                                                            <label class="custom-control-label" for="vPagamento">Visualizar Pagamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aPagamento" type="checkbox" class="custom-control-input" id="aPagamento" value="1" />
                                                            <label class="custom-control-label" for="aPagamento">Adicionar Pagamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="ePagamento" type="checkbox" class="custom-control-input" id="ePagamento" value="1" />
                                                            <label class="custom-control-label" for="ePagamento">Editar Pagamento</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dPagamento" type="checkbox" class="custom-control-input" id="dPagamento" value="1" />
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
                                                            <input name="eRelatorio" type="checkbox" class="custom-control-input" id="eRelatorio" value="1" />
                                                            <label class="custom-control-label" for="eRelatorio">Nav Relatórios</label>
                                                        </div>
                                                    </td>                                         
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rContact" type="checkbox" class="custom-control-input" id="rContact" value="1" />
                                                            <label class="custom-control-label" for="rContact">Rel. Contact</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rServico" type="checkbox" class="custom-control-input" id="rServico" value="1" />
                                                            <label class="custom-control-label" for="rServico">Rel. Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rJc" type="checkbox" class="custom-control-input" id="rJc" value="1" />
                                                            <label class="custom-control-label" for="rJc">Rel. Job Card</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr> 
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rProduct" type="checkbox" class="custom-control-input" id="rProduct" value="1" />
                                                            <label class="custom-control-label" for="rProduct">Rel. Producto</label>
                                                        </div>
                                                    </td>    
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rProduct" type="checkbox" class="custom-control-input" id="rProduct" value="1" />
                                                            <label class="custom-control-label" for="rProduct">Rel. Producto</label>
                                                        </div>
                                                    </td>                                        
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rVenda" type="checkbox" class="custom-control-input" id="rVenda" value="1" />
                                                            <label class="custom-control-label" for="rVenda">Rel. Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="rFinanceiro" type="checkbox" class="custom-control-input" id="rFinanceiro" value="1" />
                                                            <label class="custom-control-label" for="rFinanceiro">Rel. Financeiro</label>
                                                        </div>
                                                    </td>
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
                                    <a href="#Products" data-toggle="collapse" aria-expanded="true" class="text-secondary">                                
                                        <h4 class="p-1"><i class="fas fa-cubes text-cyan" data-toggle="tooltip"></i> Productos</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="Products" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                            
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="vProduct" checked="checked" type="checkbox" class="custom-control-input" id="vProduct" value="1" />
                                                            <label class="custom-control-label" for="vProduct">Visualizar Productos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aProduct" type="checkbox" class="custom-control-input" id="aProduct" value="1" />
                                                            <label class="custom-control-label" for="aProduct">Adicionar Productos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eProduct" type="checkbox" class="custom-control-input" id="eProduct" value="1" />
                                                            <label class="custom-control-label" for="eProduct">Editar Productos</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dProduct" type="checkbox" class="custom-control-input" id="dProduct" value="1" />
                                                            <label class="custom-control-label" for="dProduct">Excluir Productos</label>
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
                                                            <input name="vServico" checked="checked" type="checkbox" class="custom-control-input" id="vServico" value="1" />
                                                            <label class="custom-control-label" for="vServico">Visualizar Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aServico" type="checkbox" class="custom-control-input" id="aServico" value="1" />
                                                            <label class="custom-control-label" for="aServico">Adicionar Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eServico" type="checkbox" class="custom-control-input" id="eServico" value="1" />
                                                            <label class="custom-control-label" for="eServico">Editar Serviço</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dServico" type="checkbox" class="custom-control-input" id="dServico" value="1" />
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
                                                            <input name="vTecnico" checked="checked" type="checkbox" class="custom-control-input" id="vTecnico" value="1" />
                                                            <label class="custom-control-label" for="vTecnico">Visualizar Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aTecnico" type="checkbox" class="custom-control-input" id="aTecnico" value="1" />
                                                            <label class="custom-control-label" for="aTecnico">Adicionar Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eTecnico" type="checkbox" class="custom-control-input" id="eTecnico" value="1" />
                                                            <label class="custom-control-label" for="eTecnico">Editar Técnico</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dTecnico" type="checkbox" class="custom-control-input" id="dTecnico" value="1" />
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
                                                            <input name="vArquivo" type="checkbox" class="custom-control-input" id="vArquivo" value="1" />
                                                            <label class="custom-control-label" for="vArquivo">Visualizar Arquivo</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aArquivo" type="checkbox" class="custom-control-input" id="aArquivo" value="1" />
                                                            <label class="custom-control-label" for="aArquivo">Adicionar Arquivo</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eArquivo" type="checkbox" class="custom-control-input" id="eArquivo" value="1" />
                                                            <label class="custom-control-label" for="eArquivo">Editar Arquivo</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dArquivo" type="checkbox" class="custom-control-input" id="dArquivo" value="1" />
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
                                                            <input name="vVenda" checked="checked" type="checkbox" class="custom-control-input" id="vVenda" value="1" />
                                                            <label class="custom-control-label" for="vVenda">Visualizar Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aVenda" type="checkbox" class="custom-control-input" id="aVenda" value="1" />
                                                            <label class="custom-control-label" for="aVenda">Adicionar Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eVenda" type="checkbox" class="custom-control-input" id="eVenda" value="1" />
                                                            <label class="custom-control-label" for="eVenda">Editar Venda</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dVenda" type="checkbox" class="custom-control-input" id="dVenda" value="1" />
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
                                                            <input name="vCotacao" checked="checked" type="checkbox" class="custom-control-input" id="vCotacao" value="1" />
                                                            <label class="custom-control-label" for="vCotacao">Visualizar Cotação</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aCotacao" type="checkbox" class="custom-control-input" id="aCotacao" value="1" />
                                                            <label class="custom-control-label" for="aCotacao">Adicionar Cotação</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eCotacao" type="checkbox" class="custom-control-input" id="eCotacao" value="1" />
                                                            <label class="custom-control-label" for="eCotacao">Editar Cotação</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dCotacao" type="checkbox" class="custom-control-input" id="dCotacao" value="1" />
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
                                                            <input name="vCobranca" type="checkbox" class="custom-control-input" id="vCobranca" value="1" />
                                                            <label class="custom-control-label" for="vCobranca">Visualizar Cobrança</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="aCobranca" type="checkbox" class="custom-control-input" id="aCobranca" value="1" />
                                                            <label class="custom-control-label" for="aCobranca">Adicionar Cobrança</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="eCobranca" type="checkbox" class="custom-control-input" id="eCobranca" value="1" />
                                                            <label class="custom-control-label" for="eCobranca">Editar Cobrança</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="dCobranca" type="checkbox" class="custom-control-input" id="dCobranca" value="1" />
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
                                        <h4 class="p-1"><i class="far fa-sun text-cyan" data-toggle="tooltip"></i>Configurações</h4>
                                    </a>
                                    <div class="collapse m-t-15 well" id="configuracoes" aria-expanded="true">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>                                                         
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cConfiguracoes" type="checkbox" class="custom-control-input" id="cConfiguracoes" value="1" />
                                                            <label class="custom-control-label" for="cConfiguracoes">Nav Configurações</label>
                                                        </div>
                                                    </td>                                     
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cUsuario" type="checkbox" class="custom-control-input" id="cUsuario" value="1" />
                                                            <label class="custom-control-label" for="cUsuario">Configurar Usuário</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cEmpresa" type="checkbox" class="custom-control-input" id="cEmpresa" value="1" />
                                                            <label class="custom-control-label" for="cEmpresa">Configurar Empresa</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cPermissao" type="checkbox" class="custom-control-input" id="cPermissao" value="1" />
                                                            <label class="custom-control-label" for="cPermissao">Configurar Permissões</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>    
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cBackup" type="checkbox" class="custom-control-input" id="cBackup" value="1" />
                                                            <label class="custom-control-label" for="cBackup">Backup</label>
                                                        </div>
                                                    </td>                                        
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cAuditoria" type="checkbox" class="custom-control-input" id="cAuditoria" value="1" />
                                                            <label class="custom-control-label" for="cAuditoria">Auditoria</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cEmail" type="checkbox" class="custom-control-input" id="cEmail" value="1" />
                                                            <label class="custom-control-label" for="cEmail">Email</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="cSistema" type="checkbox" class="custom-control-input" id="cSistema" value="1" />
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
                        
                        <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 p-r-30">Salvar</span></button>
                                
                        <button type="reset" class="btn btn-warning waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-broom"></i></span><span class="button__text2 p-r-25">Limpar</span></button>

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
