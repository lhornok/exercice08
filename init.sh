#!/usr/bin/env bash

sleep 20
wget http://localhost:8002/prestashop/fr/ -o /tmp/1.log -O /tmp/index.html
wget 'http://localhost:8002/prestashop/fr/recherche?controller=search&s=renard' -o /tmp/2.log -O /tmp/search.html
wget http://localhost:8002/prestashop/fr/accessoires-de-maison/9-coussin-renard.html -o /tmp/30.log -O /tmp/coussin.html
wget http://localhost:8002/prestashop/fr/panier?action=show -o /tmp/4.log -O /tmp/panier.html

rm -f /tmp/result.xml
