<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de contact</title>
</head>
<body>
    <h2>Nouvelle demande de contact</h2>

    <p><strong>Nom :</strong> {{ $data['contactName'] }}</p>
    <p><strong>Téléphone :</strong> {{ $data['contactPhone'] }}</p>
    <p><strong>Numéro WhatsApp :</strong> {{ $data['contactWhatsNumber'] }}</p>
    <p><strong>Email :</strong> {{ $data['contactEmail'] }}</p>

    @if(!empty($data['contactsubject']))
        <p><strong>Objet :</strong> {{ $data['contactsubject'] }}</p>
    @endif

    @if(!empty($data['contactMessage']))
        <p><strong>Message :</strong></p>
        <p>{{ $data['contactMessage'] }}</p>
    @endif
</body>
</html>
