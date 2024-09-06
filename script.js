
// Charger les données lors du chargement de la page
const Url = 'http://localhost:3000/clients';
document.addEventListener('DOMContentLoaded', loadClientData){
   

    // Récupération des éléments par leurs IDs
const clientPrenom = document.getElementById('clientPrenom');
const clientNom = document.getElementById('clientNom');
const clientTel = document.getElementById('clientTel');
const clientEmail = document.getElementById('clientEmail');

const montantTotal = document.getElementById('montantTotal');
const montantVerse = document.getElementById('montantVerse');
const montantRestant = document.getElementById('montantReste');

// Exemple de données du client (vous pouvez remplacer ceci par des données dynamiques)
const clientData = {
    prenom: 'Badara',
    nom: 'Ba',
    tel: '771234501',
    email: 'bbbadara@gmail.com',
    montantTotal: 25000,
    montantVerse: 20000
}
};
