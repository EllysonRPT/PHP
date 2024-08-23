@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="my-4">Ajuda e Suporte</h1>

    <p>Bem-vindo à seção de ajuda da nossa farmácia. Aqui você encontrará informações úteis para ajudá-lo a usar nosso sistema de maneira eficiente.</p>

    <h2 class="my-3">Como Cadastrar um Novo Produto</h2>
    <p>Para cadastrar um novo produto em nosso sistema, siga os passos abaixo:</p>
    <ol>
        <li>Acesse o painel de administração.</li>
        <li>Clique em "Criar Novo Produto".</li>
        <li>Preencha os campos necessários como nome, descrição, categoria, quantidade e preço.</li>
        <li>Carregue uma imagem do produto se desejar.</li>
        <li>Finalize clicando em "Enviar".</li>
    </ol>

    <h2 class="my-3">Como Editar um Produto Existente</h2>
    <p>Para editar um produto já cadastrado:</p>
    <ol>
        <li>No painel de administração, vá até a lista de produtos.</li>
        <li>Encontre o produto que deseja editar e clique em "Editar".</li>
        <li>Atualize as informações conforme necessário.</li>
        <li>Salve as alterações clicando em "Enviar".</li>
    </ol>

    <h2 class="my-3">Como Adicionar Produtos ao Carrinho</h2>
    <p>Para adicionar um produto ao carrinho:</p>
    <ol>
        <li>Encontre o produto desejado na lista de produtos.</li>
        <li>Selecione a quantidade e clique em "Adicionar ao Carrinho".</li>
    </ol>

    <h2 class="my-3">Como Entrar em Contato Conosco</h2>
    <p>Se você tiver dúvidas ou precisar de suporte adicional, você pode:</p>
    <ol>
        <li>Acessar a página de contato através do menu principal.</li>
        <li>Preencher o formulário com seu nome, email e mensagem.</li>
        <li>Clicar em "Enviar" para nos enviar sua mensagem.</li>
    </ol>

    <h2 class="my-3">Dúvidas Frequentes</h2>
    <p>Confira as perguntas mais frequentes abaixo:</p>
    <ul>
        <li><strong>Como recuperar minha senha?</strong> - Clique em "Esqueceu a Senha" na página de login e siga as instruções.</li>
        <li><strong>Posso atualizar minhas informações pessoais?</strong> - Sim, você pode atualizar suas informações no painel de usuário.</li>
    </ul>
</div>
@endsection
    