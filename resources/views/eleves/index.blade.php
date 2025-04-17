<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Élèves</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Liste des Élèves</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Demandeur d'emploi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($eleves as $eleve)
                <tr>
                    <td>{{ $eleve->nom }}</td>
                    <td>{{ $eleve->prenom }}</td>
                    <td>{{ $eleve->age }}</td>
                    <td>{{ $eleve->demandeur_emploi ? 'Oui' : 'Non' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Aucun élève trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>