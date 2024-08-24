@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/foto1.jpg" class="w-100 carousel-img" alt="">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/foto2.jpg" class="w-100 carousel-img" alt="">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/foto3.jpg" class="w-100 carousel-img" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Seção de Remédios em Promoção -->
    <div class="promotion-section">
        <h2>Remédios em Promoção</h2>
        <div class="promotion-items">
            <!-- Exemplo de item em promoção -->
            <div class="promotion-item">
                <img src="/assets/img/foto4.jpg" alt="Medicamento 1">
                <h3>Nome do Medicamento 1</h3>
                <p>Descrição breve do medicamento 1.</p>
                <p class="price">Preço: R$ 10,00</p>
            </div>
            <div class="promotion-item">
                <img src="/assets/img/foto6.jpg" alt="Medicamento 2">
                <h3>Nome do Medicamento 2</h3>
                <p>Descrição breve do medicamento 2.</p>
                <p class="price">Preço: R$ 20,00</p>
            </div>
            <!-- Adicione mais itens conforme necessário -->
        </div>
    </div>
@endsection
