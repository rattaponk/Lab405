import Firebase from 'firebase'

/* Firebase configuration */
var config = {
    apiKey: "AIzaSyAfaqofPgqiMMNpIwKUQefXE416LfSqYow",
    authDomain: "project405-bba3f.firebaseapp.com",
    databaseURL: "https://project405-bba3f.firebaseio.com",
    projectId: "project405-bba3f",
    storageBucket: "project405-bba3f.appspot.com",
    messagingSenderId: "438468196762"
};

const firebaseApp = Firebase.initializeApp(config);
const db = firebaseApp.database();

export { firebaseApp, db };