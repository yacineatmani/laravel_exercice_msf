<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Bâtiments</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Liste des Bâtiments</h1>
    <ul>
        @forelse ($batiments as $batiment)
            <li>
                <strong>{{ $batiment->nom }}</strong>: {{ $batiment->description }}
            </li>
        @empty
            <li>Aucun bâtiment trouvé.</li>
        @endforelse
    </ul>
</body>
</html>