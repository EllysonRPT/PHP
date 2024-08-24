@extends('layouts.app')

@section('content')
<div class="pharmacist-container">
    <h1 class="pharmacist-title">Manual do Farmacêutico</h1>
    
    <p class="pharmacist-description">
        Bem-vindo ao manual do farmacêutico. Aqui você encontrará informações importantes sobre suas responsabilidades, procedimentos e as ferramentas disponíveis para gerenciar as operações da farmácia de forma eficiente.
    </p>
    
    <h2 class="pharmacist-subtitle">Responsabilidades</h2>
    <ul class="pharmacist-features">
        <li><strong>Gerenciamento de Medicamentos:</strong> Cadastrar, atualizar e remover medicamentos do sistema. Assegurar que as informações estejam sempre corretas e atualizadas.</li>
        <li><strong>Controle de Estoque:</strong> Monitorar e manter o estoque adequado de medicamentos. Realizar ajustes quando necessário e garantir que os produtos estejam dentro do prazo de validade.</li>
        <li><strong>Atendimento ao Cliente:</strong> Auxiliar clientes na escolha de medicamentos e responder a dúvidas sobre produtos e prescrições.</li>
        <li><strong>Relatórios e Análises:</strong> Gerar relatórios de vendas e de estoque. Analisar dados para tomar decisões informadas sobre o gerenciamento de produtos e estratégias de venda.</li>
        <li><strong>Segurança e Compliance:</strong> Garantir que todas as práticas estejam de acordo com as regulamentações e normas de segurança. Manter a confidencialidade das informações dos clientes e respeitar as políticas da empresa.</li>
    </ul>
    
    <h2 class="pharmacist-subtitle">Procedimentos Operacionais</h2>
    <p class="pharmacist-description">
        Para realizar as operações básicas, siga os procedimentos descritos abaixo:
    </p>
    <ul class="pharmacist-features">
        <li><strong>Cadastro de Medicamentos:</strong> Navegue até a seção de medicamentos, clique em "Adicionar Novo", preencha os detalhes e salve as informações.</li>
        <li><strong>Atualização de Estoque:</strong> Acesse a lista de medicamentos, selecione o item desejado, ajuste a quantidade e atualize o estoque.</li>
        <li><strong>Geração de Relatórios:</strong> Vá para a seção de relatórios, selecione o tipo desejado e ajuste o período. Clique em "Gerar Relatório" para visualizar ou exportar.</li>
    </ul>
    
    <h2 class="pharmacist-subtitle">Contato e Suporte</h2>
    <p class="pharmacist-description">
        Caso precise de assistência adicional, entre em contato com o suporte técnico através do e-mail <a href="mailto:support@farmacia.com">support@farmacia.com</a> ou ligue para nosso número de suporte: (11) 1234-5678.
    </p>
</div>
@endsection
