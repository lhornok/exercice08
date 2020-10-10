#!/usr/bin/env bash

sleep 60
wget http://localhost:8002/prestashop/fr/ -o /tmp/1.log -O /tmp/index.html
wget 'http://localhost:8002/prestashop/fr/recherche?controller=search&s=renard' -o /tmp/2.log -O /tmp/search.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/30.log -O /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/panier?action=show -o /tmp/4.log -O /tmp/panier.html
/usr/bin/firefox --marionette -headless -foreground -no-remote --screenshot index.jpg 'http://192.168.34.30:8002/prestashop/fr'
/usr/bin/firefox --marionette -headless -foreground -no-remote --screenshot search.jpg 'http://192.168.34.30:8002/prestashop/fr/recherche?controller=search&s=renard'
/usr/bin/firefox --marionette -headless -foreground -no-remote --screenshot coussin.jpg 'http://192.168.34.30:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html'

rm -f /tmp/result.xml
