# estudos
|     |     |     |     |     |
| --- | --- | --- | --- | --- |
| **Propriedade** | **Descrição** | **Obrigatório** | **Condição** | **Tipo** |
| type | Tipo do boleto, indicando se é um modelo comum (apenas código de barras) ou híbrido (código de barras e qrcode pix). | Sim | O valor deve ser "common" ou "hybrid". | String |
| amount | Valor do boleto. | Sim | O valor deve ser maior que 0. | Inteiro |
| expires\_at | Data de vencimento do boleto. | Sim. | Deverá possuir o formato de data "YYYY-MM-DD", ser superior ou igual a data de hoje e estar entre o primeiro e vigésimo quinto dia do mês. | Date |
| fees | Juros do Boleto. | Sim. | O valor deve ser maior que 0. | Inteiro |
| fine | Multa diária. | Sim. | O valor deve ser maior que 0. | Inteiro |
| payer | Pagador do Boleto. | Sim. |     | Objeto |
| payer.name | Nome do pagador. | Sim. |     | string |
| payer.document | Cpf ou Cnpj do pagador. | Sim. |     | string |
| payer.address\_zipcode | CEP do pagador. | Sim. |     | string |
| payer.address\_city | Cidade do pagador. | Sim. |     | string |
| payer.address\_neighborhood | Bairro do pagador. | Sim. |     | string |
| payer.address | Rua do pagador. | Sim. |     | string |
| payer.address\_state | Estado do pagador. | Sim. |     | string |
| payer.address\_number | Número do pagador. | Sim. |     | string |
| payer.address\_complement | Complemento do endereço do pagador. | Não. |     | string |
| payer.email | Email do pagador. | Não. |     | string |
| payer.phone | Telefone do pagador. | Não. |     | string |