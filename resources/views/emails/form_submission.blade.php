<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle demande de formation</title>
</head>
<body>
    <h2>Nouvelle demande de formation reçue</h2>
    <p><strong>Nom de l'entreprise :</strong> {{ $data['companyName'] }}</p>
    <p><strong>Nom et Prénoms :</strong> {{ $data['fullName'] }}</p>
    <p><strong>Poste :</strong> {{ $data['jobTitle'] }}</p>
    <p><strong>Téléphone :</strong> {{ $data['phoneNumber'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Besoins en formation :</strong></p>
    <p>{{ $data['trainingNeeds'] }}</p>
</body>
</html>
