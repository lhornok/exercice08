#!/usr/bin/env bash

sleep 20
wget http://localhost:8002/prestashop/fr/ -o /tmp/1.log -O /tmp/index.html
wget 'http://localhost:8002/prestashop/fr/recherche?controller=search&s=renard' -o /tmp/2.log -O /tmp/search.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/30.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/31.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/32.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/33.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/34.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/35.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/36.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/37.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/38.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/39.log /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/panier?action=show -o /tmp/4.log /tmp/panier.html

rm -f /tmp/result.xml
