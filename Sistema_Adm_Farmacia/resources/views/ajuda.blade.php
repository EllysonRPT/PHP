@extends('layouts.app')

@section('content')
<div class="user-container">
    <h1 class="user-title">Manual do Usuário</h1>
    
    <p class="user-description">
        Bem-vindo ao manual do usuário. Aqui você encontrará todas as informações necessárias para usar nosso sistema de forma eficiente e aproveitar ao máximo nossas funcionalidades.
    </p>
    
    <h2 class="user-subtitle">Como Cadastrar-se</h2>
    <p class="user-description">
        Para criar uma conta, clique em "Cadastrar" na página inicial e preencha o formulário com suas informações pessoais. Após o cadastro, você receberá um e-mail de confirmação com instruções para ativar sua conta.
    </p>
    
    <h2 class="user-subtitle">Como Realizar uma Compra</h2>
    <p class="user-description">
        Navegue até a seção de produtos e adicione os itens desejados ao carrinho. Quando estiver pronto para finalizar a compra, clique em "Finalizar Compra", revise seu pedido e escolha um método de pagamento. Após confirmar, você receberá um e-mail com os detalhes do pedido.
    </p>
    
    <h2 class="user-subtitle">Como Consultar Informações</h2>
    <p class="user-description">
        Você pode consultar suas compras anteriores e verificar o status de pedidos na seção "Minha Conta". Também é possível visualizar informações sobre produtos e descontos em nossa página de ofertas.
    </p>
    
    <h2 class="user-subtitle">Suporte e Contato</h2>
    <p class="user-description">
        Se precisar de ajuda, entre em contato com nosso suporte através do e-mail <a href="mailto:support@farmacia.com">support@farmacia.com</a> ou ligue para nosso número de suporte: (11) 1234-5678. Estamos aqui para ajudar!
    </p>
</div>
@endsection
