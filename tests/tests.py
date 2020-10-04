# -*- coding: utf-8 -*-

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.firefox.options import Options as FirefoxOptions
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions

# <a href="mailto:zlonok@gmail.com" class="dropdown">zlonok@gmail.com</a>
# <input type="text" name="s" value="" placeholder="Rechercher" aria-label="Rechercher" class="ui-autocomplete-input" autocomplete="off">
# <a href="http://192.168.34.30/prestashop/fr/accessoires-de-maison/9-coussin-renard.html">Coussin renard</a>
# <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit"><i class="material-icons shopping-cart"></i>Ajouter au panier</button>
# Add to cart : /html/body/main/section/div/div/section/div[1]/div[2]/div[2]/div[2]/form/div[2]/div/div[2]/button

def foxTest(strArticle='Renard', driver=''):
    ''' 
        Test de recherche d'un article coussin renard et ajout dans le panier de cet article
    '''
    try:
        element = driver.find_element_by_name('s')
    except:
        print ('Ko')
    else:
        element.send_keys("Renard")
        element.send_keys(Keys.RETURN)
        WebDriverWait(driver,20).until(expected_conditions.title_contains('Rechercher'))
        print("Search ok")
        try:
            linkArticle = driver.find_element_by_partial_link_text("Coussin")
        except:
            print ('fox not found')
        else:
            print ('Coussin Renard ok')
            linkArticle.click()
            WebDriverWait(driver,20).until(expected_conditions.title_contains('Coussin'))
            quantity = driver.find_element_by_id('quantity_wanted')
            quantity.clear()
            quantity.send_keys("2")
            try:
                addToCart = driver.find_element_by_xpath('/html/body/main/section/div/div/section/div[1]/div[2]/div[2]/div[2]/form/div[2]/div/div[2]/button')
            except:
                print('Button not found')
            else:
                print('add to cart ok')
                addToCart.click()
                driver.back()
                try:
                    #http://192.168.34.30/prestashop/fr/panier?action=show
                    #linkPanier = driver.find_element_by_partial_link_text('panier&#63;action&#61;show')
                    linkPanier = driver.find_element_by_xpath('/html/body/main/header/nav/div/div/div[1]/div[2]/div[3]/div/div/a')
                except:
                    print('link not found')
                else:
                    linkPanier.click()
                    WebDriverWait(driver,20).until(expected_conditions.title_contains('Panier'))
                    print (driver.title)
                    try:
                        panier_quantity = driver.find_element_by_name('product-quantity-spin')
                    except:
                        print ('quantity not found')
                    else:
                        if int(panier_quantity.get_attribute('value')) == 2:
                            print('Quantity match')
                        else:
                            print ('Quantit error')
                        try:
                            panierLinkArticle = driver.find_element_by_partial_link_text("Coussin")
                        except:
                            print ('Article error')
                        else:
                            if panierLinkArticle.text == 'Coussin renard':
                                print ('Article match')
                            else:
                                print ('Article error')
                        print('End of test')

def main():
    ## Nécessaire, car pas d'interface graphique sur la vm
    options = webdriver.FirefoxOptions()
    options.set_headless(headless=True)
    options.set_preference("browser.privatebrowsing.autostart", True)
    driver = webdriver.Firefox(firefox_options=options)

    driver.get("http://localhost/prestashop/fr")
    assert "DFTG" in driver.title
    print ("Title ok ...")
    assert driver.find_element(By.XPATH, "//*[text()='zlonok@gmail.com']")
    print ("Email ok ...")
    foxTest(driver=driver)
    driver.close()

if __name__ == ('__main__'):
    main()
