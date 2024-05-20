<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjetoRouanet;

class TbProjetoRouanetTesteSeeder extends Seeder
{
    public function run()
    {

        $dados = [
            [
                'id_projeto' => 57030,
                'pronac' => '181950',
                'ano_projeto' => '18',
                'nome' => 'Circuito da Alegria 3',
                'segmento' => 'Teatro',
                'area' => 'Artes Cênicas',
                'uf' => 'RS',
                'municipio' => 'Porto Alegre',
                'data_inicio' => '2018-09-14',
                'data_termino' => '2018-12-21',
                'situacao' => 'Autorizada a captação residual dos recursos',
                'mecanismo' => 'Mecenato',
                'enquadramento' => 'Artigo 18',
                'valor_captado' => '162000',
                'valor_aprovado' => '183237.6',
                'acessibilidade' => 'ACESSIBILIDADE FÍSICA: Os espaços escolhidos para realização das apresentações possuem fácil acesso por meio de rampas para pessoas com mobilidade reduzida, banheiros adaptados, assentos especiais e outras facilidades. ACESSIBILIDADE DE CONTEÚDO: Será realizada uma apresentação com audiodescrição e tradução em Libras e, sempre que tecnicamente viável, a divulgação terá a legenda "Para Cego Ver".',
                'objetivos' => null,
                'justificativa' => 'A terceira edi��o do projeto Circuito da Alegria buscar� repetir as boas parcerias para realiza��o de projetos culturais e ampliar o alcance de espet�culos teatrais de humor, para mais pessoas. Em 2018 o comediante ga�cho Cris Pereira vai convidar o fluminense Leandro Hassum para, juntos, formarem um novo espet�culo que levar� entretenimento � 3 cidades do Rio Grande do Sul. As apresenta��es est�o previstas para acontecerem em novembro de 2018, nas cidades de Porto Alegre, Novo Hamburgo e Pelotas, no RS. ����������� O foco criador do projeto que foi (em 2015) descentralizar a cultura levando para cidades do interior espet�culos c�micos com artistas reconhecidos do grande p�blico atrav�s da TV e internet est� mantido e mais forte. A equipe da Artistaria buscou nessa terceira edi��o do Circuito da Alegria promover o interc�mbio de comediantes, como j� realizou na segunda edi��o, ligando modos diferentes de interpretar e fazer teatro, oferecendo um novo espet�culo para o p�blico que poder� desfrutar desse encontro. O projeto acredita que o interc�mbio entre artistas e linguagens contribui para o crescimento e profissionaliza��o do mercado de humor. Mercado este que muitas vezes fica desprestigiado da cr�tica, mas que carrega, dentro de sua dramaturgia, a cria��o de personagens e textos com profunda pesquisa f�sica e psicol�gica. Por caracter�stica intr�nseca � encena��o, traz � tona a cr�tica social, ponto chave do fazer teatral, por uma �tica leve, mas n�o menos profunda. Desta forma, o g�nero da com�dia � encarado de maneira s�ria, como segmento teatral que gera fluxo de p�blico pelos teatros, viabiliza a cria��o de dramaturgias novas e estimula a gera��o de emprego e renda do setor da economia da cultura. ����������� A execu��o exitosa das primeiras edi��es do projeto, em 2015 e 2017 respectivamente, incentiva a equipe da Artistaria na realiza��o desta terceira edi��o com a mesma efic�cia operacional. O novo projeto vai promover o di�logo com novos interlocutores (produtores, fornecedores e patrocinadores), buscar a amplia��o do p�blico alcan�ado nos anos anteriores e manter a proposta de circula��o levando o projeto para duas cidades do interior, al�m da Capital (Porto Alegre) do RS. ����������� O mecanismo de incentivo fiscal foi de extrema import�ncia na realiza��o da primeira e da segunda edi��o deste projeto, auxiliando no custeio de toda produ��o e permitindo que os espet�culos percorressem cidades do interior; para esta edi��o de 2018, acreditamos que as boas parcerias ser�o mantidas e desta forma, gostar�amos de contar o benef�cio fiscal mais uma vez. Entendemos que a manuten��o de projetos bem sucedidos refor�a os elos positivos da cadeia econ�mica cultural e estimulam rela��es saud�veis entre fomentadores, realizadores, patrocinadores e o p�blico ? maior benefici�rio destas iniciativas. De acordo com o Art. 1� da Lei n� 8313/91, este projeto se justifica pelos incisos: I�- contribuir para facilitar, a todos, os meios para o livre acesso �s fontes da cultura e o pleno exerc�cio dos direitos culturais; II�- promover e estimular a regionaliza��o da produ��o cultural e art�stica brasileira, com valoriza��o de recursos humanos e conte�dos locais; III�- apoiar, valorizar e difundir o conjunto das manifesta��es culturais e seus respectivos criadores; IV�- proteger as express�es culturais dos grupos formadores da sociedade brasileira e respons�veis pelo pluralismo da cultura nacional; VIII�- estimular a produ��o e difus�o de bens culturais de valor universal, formadores e informadores de conhecimento, cultura e mem�ria; IX�- priorizar o produto cultural origin�rio do Pa�s. � Para atender ao Art 3� da Lei n� 8313/91, este projeto se prop�e a contemplar o objetivo: II�- fomento � produ��o cultural e art�stica, mediante: c)�realiza��o de exposi��es, festivais de arte, espet�culos de artes c�nicas, de m�sica e de folclore; IV�- est�mulo ao conhecimento dos bens e valores culturais, mediante: a)�distribui��o gratuita e p�blica de ingressos para espet�culos culturais e art�sticos; � Destaco tamb�m que o projeto enquadra-se nas caracter�sticas do art. 18 da Lei Rouanet, visto que se trata da circula��o de espet�culo de artes c�nicas.',
                //TODO
            ],
        ];

        foreach ($dados as $dado) {
            ProjetoRouanet::create($dado);
        }
    }
}
