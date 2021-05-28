<?php
$tx2 =


"FORMATO=TX2\r\n".
             "NumLote=0\r\n".
             "INCLUIR\r\n".
             "Id_A03=0\r\n".
             "versao_A02=4.00\r\n".                                                            //Versão da NF-e
             "cUF_B02=$ufEmit->coduf "
             
INCLUIR

NumeroLote=0
CPFCNPJRemetente = PARAMETRO
InscricaoMunicipalRemetente= PARAMETRO  
ValorTotalServicos=  VENDA
ValorTotalDeducoes=  0
ValorTotalBaseCalculo= VENDA
SALVAR


INCLUIRRPS
SituacaoNota= 1
TipoRps = ''
SerieRps = 1
NumeroRps = VENDA
DataEmissao= VENDA
Competencia = VENDA
CpfCnpjPrestador = PARAMETRO
InscricaoMunicipalPrestador= PARAMETRO
RazaoSocialPrestador= PARAMETRO
InscricaoEstadualPrestador= PARAMETRO
TipoLogradouroPrestador= ''
EnderecoPrestador= PARAMETRO
NumeroPrestador= PARAMETRO
ComplementoPrestador= PARAMETRO
TipoBairroPrestador= ''
BairroPrestador= PARAMETRO
CodigoCidadePrestador= MUNICIPIO
DescricaoCidadePrestador= PARAMETRO
TelefonePrestador= PARAMETRO
EmailPrestador= PARAMETRO
CepPrestador= PARAMETRO


OptanteSimplesNacional= PARAMETRO FISCAL
IncentivadorCultural= PARAMETRO FISCAL
RegimeEspecialTributacao= PARAMETRO FISCAL
NaturezaTributacao= PARAMETRO FISCAL
IncentivoFiscal= PARAMETRO FISCAL
TipoTributacao= PARAMETRO FICAL
ExigibilidadeISS= PARAMETRO FISCAL
Operacao = A -- VERIFICAR COM RUBERVAL

CodigoItemListaServico = SERVICO
CodigoTributacaoMunicipio= SERVICO
CodigoCnae = PARAMETRO FISCAL
DiscriminacaoServico= ITEM SERVICO 

MunicipioIncidencia = MUNICIPIO/PARAMETRO
CodigoCidadePrestacao = MUNICIPIO/CLIENTE
DescricaoCidadePrestacao = MUNICIPIO/CLIENTE

--------------DADOS CLIENTE------------------

CpfCnpjTomador= CLIENTE
RazaoSocialTomador= CLIENTE
InscricaoEstadualTomador= CLIENTE
InscricaoMunicipalTomador= CLIENTE
TipoLogradouroTomador= ''
EnderecoTomador= CLIENTE
NumeroTomador= CLINTE
ComplementoTomador= CLIENTE
BairroTomador= CLIENTE
CodigoCidadeTomador= MUNICIPIO/CLIENTE
DescricaoCidadeTomador= CLIENTE
UfTomador= UF
CepTomador= CLIENTE 
PaisTomador=1058
DDDTomador= ''
TelefoneTomador= ''
EmailTomador= CLIENTE

------------FIM DADOS CLIENTE---------------

AliquotaPIS= 0
AliquotaCOFINS= 0
AliquotaINSS= 0
AliquotaIR= 0
AliquotaCSLL= 0
ValorPIS= 0
ValorCOFINS= 0
ValorINSS= 0
ValorIR= 0
ValorCSLL= 0
OutrasRetencoes= 0
DescontoIncondicionado= 0
DescontoCondicionado= 0
ValorDeducoes= 0


ValorServicos = ITEM SERVICO 
BaseCalculo= ITEM SERVICO 
AliquotaISS= ITEM SERVICO
ValorIss= ITEM SERVICO
IssRetido= ITEM SERVICO
ValorISSRetido= ITEM SERVICO
ValorLiquidoNfse= ITEM SERVICO

---------SOMENTE SE POSSUIR UM SEGUNDO OU MAIS SERVICO------------
INCLUIRSERVICO

... dados do segundo serviço ...

SALVARSERVICO


SALVARRPS