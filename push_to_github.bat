@echo off
cd /D "chemin_vers_le_dossier_du_projet"

REM Ajouter tous les fichiers modifiés
git add .

REM Faire un commit avec un message prédéfini
git commit -m "Ajout automatique de fichiers"

REM Poussez les modifications vers GitHub (en supposant que la branche est 'main')
git push origin main
