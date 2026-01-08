@extends('layouts.app')

@section('title', $categorie == 'hicking' ? 'Électroménager' : 'Électroménager')

@section('content')
    <div class="category-header">
        <h1 class="category-title">
            {{ $categorie == 'hicking' ? 'Randonnée' : 'Électroménager' }}
        </h1>
        <span class="category-badge">
            {{ count($products) }} produits disponibles
        </span>
    </div>

    @if(count($products) > 0)
        <!-- Tableau des produits (version tableau) -->
        <div style="margin-top: 4rem; background: white; border-radius: var(--radius); padding: 2rem; box-shadow: var(--shadow);">
            <h2 style="margin-bottom: 1.5rem; color: var(--dark);">Liste des Produits de la catégorie {{ $categorie == 'hicking' ? 'hicking' : 'electromenager' }}</h2>
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: var(--gray);">
                        <th style="padding: 1rem; text-align: left; border-bottom: 2px solid var(--primary);">Nom</th>
                        <th style="padding: 1rem; text-align: left; border-bottom: 2px solid var(--primary);">Prix</th>
                        <th style="padding: 1rem; text-align: left; border-bottom: 2px solid var(--primary);">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr style="border-bottom: 1px solid var(--gray);">
                            <td style="padding: 1rem;">{{ $product['nom'] }}</td>
                            <td style="padding: 1rem; font-weight: 600; color: var(--primary);">{{ $product['prix'] }}</td>
                            <td style="padding: 1rem;">
                                @if(file_exists(public_path('imgs/' . $product['image'])))
                                    <img src="{{ asset('imgs/' . $product['image']) }}" alt="{{ $product['nom'] }}" style="width: 80px; height: 60px; object-fit: cover; border-radius: 4px;">
                                @else
                                    <div style="width: 80px; height: 60px; background: var(--gray); display: flex; align-items: center; justify-content: center; border-radius: 4px; color: var(--secondary);">
                                        Image
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <style>
        table {
            width: 100%;
            margin-top: 2rem;
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--gray);
        }
        
        th {
            background: var(--light);
            font-weight: 600;
            color: var(--dark);
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        tr:hover {
            background: #f8fafc;
        }
    </style>
@endsection