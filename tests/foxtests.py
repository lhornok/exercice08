# -*- coding: utf-8 -*-

import unittest

from selenium import webdriver
from selenium.webdriver.firefox.options import Options as FirefoxOptions
from selenium.webdriver.support import expected_conditions
from selenium.webdriver.support.ui import WebDriverWait

import page

import time

class FoxCommand(unittest.TestCase):
    """ test prestashop"""

    def setUp(self):
        self.options = webdriver.FirefoxOptions()
        self.options.set_preference("browser.privatebrowsing.autostart", True)
        self.options.set_preference("browser.cache.disk.enable", False)
        self.options.set_preference("browser.cache.memory.enable", False)
        self.options.set_preference("browser.cache.offline.enable", False)
        self.options.set_preference("network.http.use-cache", False)
        self.options.headless=True
        self.driver = webdriver.Firefox(options=self.options)
        self.driver.get("http://192.168.34.30:8002/prestashop/fr/")

    def tests(self):
        """
         - Recherche article Renard
         - Recherche lien coussin
         - Click sur le lien article
         - Affichage du détail de l'article
         - Ajout au panier avec une quantité de 2
         - Affiche du panier 
        """

        main_page = page.MainPage(self.driver)
        WebDriverWait(self.driver,20).until(expected_conditions.title_contains('DFTG'))
        assert main_page.is_title_matches(), "Title DFTG not found ..."
        main_page.search_text_element = "renard"
        main_page.click_search()
        WebDriverWait(self.driver,20).until(expected_conditions.title_contains('Rechercher'))
        main_page.link_article()
        WebDriverWait(self.driver,20).until(expected_conditions.title_contains('Coussin'))
        main_page.put_art_qty()
        main_page.add_to_cart()
        main_page.get('http://192.168.34.30:8002/prestashop/fr/panier?action=show')
        WebDriverWait(self.driver,20).until(expected_conditions.title_contains('Panier'))
        assert main_page.check_article_cart(), "Article name not match ..."
        assert main_page.check_article_qty_cart(), "Article quantity not match ..."

    def tearDown(self):
        self.driver.close()

if __name__ == "__main__":
    unittest.main()
