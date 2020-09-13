<?php

class Configuration extends ConfigurationCore {};
class CustomerMessage extends CustomerMessageCore {};
class Attribute extends AttributeCore {};
class Zone extends ZoneCore {};
class Access extends AccessCore {};
class Attachment extends AttachmentCore {};
abstract class Cache extends CacheCore {};
class CacheApc extends CacheApcCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class AddressChecksum extends AddressChecksumCore {};
class Feature extends FeatureCore {};
class PhpEncryption extends PhpEncryptionCore {};
class SupplyOrder extends SupplyOrderCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockMvtReason extends StockMvtReasonCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockAvailable extends StockAvailableCore {};
class StockMvt extends StockMvtCore {};
class Warehouse extends WarehouseCore {};
class StockManager extends StockManagerCore {};
class StockMvtWS extends StockMvtWSCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class Stock extends StockCore {};
class Guest extends GuestCore {};
class LinkProxy extends LinkProxyCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class Tax extends TaxCore {};
class TaxRule extends TaxRuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class Language extends LanguageCore {};
class Image extends ImageCore {};
class SpecificPrice extends SpecificPriceCore {};
class Link extends LinkCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class Carrier extends CarrierCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class Module extends ModuleCore {};
class Country extends CountryCore {};
class Supplier extends SupplierCore {};
class Address extends AddressCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class Meta extends MetaCore {};
class CccReducer extends CccReducerCore {};
class StylesheetManager extends StylesheetManagerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class JsMinifier extends JsMinifierCore {};
class JavascriptManager extends JavascriptManagerCore {};
abstract class ObjectModel extends ObjectModelCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class ProductDownload extends ProductDownloadCore {};
class AttributeLang extends AttributeLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class RiskLang extends RiskLangCore {};
class ContactLang extends ContactLangCore {};
class ProfileLang extends ProfileLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class GenderLang extends GenderLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class DataLang extends DataLangCore {};
class CategoryLang extends CategoryLangCore {};
class GroupLang extends GroupLangCore {};
class FeatureLang extends FeatureLangCore {};
class ThemeLang extends ThemeLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class TabLang extends TabLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class MetaLang extends MetaLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class CarrierLang extends CarrierLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class Message extends MessageCore {};
class CartRule extends CartRuleCore {};
class Chart extends ChartCore {};
class Category extends CategoryCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class Shop extends ShopCore {};
class ShopUrl extends ShopUrlCore {};
class ShopGroup extends ShopGroupCore {};
class Search extends SearchCore {};
class CMSRole extends CMSRoleCore {};
class LocalizationPack extends LocalizationPackCore {};
class AttributeGroup extends AttributeGroupCore {};
class CustomerThread extends CustomerThreadCore {};
class Windows extends WindowsCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Store extends StoreCore {};
class Product extends ProductCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class TreeToolbar extends TreeToolbarCore {};
class Tree extends TreeCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutSession extends CheckoutSessionCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class AddressValidator extends AddressValidatorCore {};
class DateRange extends DateRangeCore {};
class Manufacturer extends ManufacturerCore {};
class Connection extends ConnectionCore {};
class Delivery extends DeliveryCore {};
class FileLogger extends FileLoggerCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class Controller extends ControllerCore {};
class FrontController extends FrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class ProductSupplier extends ProductSupplierCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class Tag extends TagCore {};
class AddressFormat extends AddressFormatCore {};
class Customer extends CustomerCore {};
class SupplierAddress extends SupplierAddressCore {};
class RequestSql extends RequestSqlCore {};
class Media extends MediaCore {};
class Alias extends AliasCore {};
class State extends StateCore {};
class Mail extends MailCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class ProductAssembler extends ProductAssemblerCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class Curve extends CurveCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderDetail extends OrderDetailCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderReturn extends OrderReturnCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderMessage extends OrderMessageCore {};
class Order extends OrderCore {};
class OrderSlip extends OrderSlipCore {};
class OrderState extends OrderStateCore {};
class Employee extends EmployeeCore {};
class Customization extends CustomizationCore {};
class CSV extends CSVCore {};
class CMS extends CMSCore {};
class SearchEngine extends SearchEngineCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class CMSCategory extends CMSCategoryCore {};
class FeatureValue extends FeatureValueCore {};
class ProductSale extends ProductSaleCore {};
class Referrer extends ReferrerCore {};
class Translate extends TranslateCore {};
class Cookie extends CookieCore {};
class Gender extends GenderCore {};
class Combination extends CombinationCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Uploader extends UploaderCore {};
class ImageType extends ImageTypeCore {};
class Group extends GroupCore {};
class Currency extends CurrencyCore {};
class HelperList extends HelperListCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperKpi extends HelperKpiCore {};
class HelperOptions extends HelperOptionsCore {};
class Helper extends HelperCore {};
class HelperForm extends HelperFormCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperShop extends HelperShopCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperView extends HelperViewCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class Tab extends TabCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class QuickAccess extends QuickAccessCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class DbPDO extends DbPDOCore {};
class DbMySQLi extends DbMySQLiCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class Context extends ContextCore {};
class Cart extends CartCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Tools extends ToolsCore {};
class ImageManager extends ImageManagerCore {};
class Page extends PageCore {};
class FileUploader extends FileUploaderCore {};
class GroupReduction extends GroupReductionCore {};
class Contact extends ContactCore {};
class Pack extends PackCore {};
class CustomerAddress extends CustomerAddressCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class FormField extends FormFieldCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerForm extends CustomerFormCore {};
class Risk extends RiskCore {};
class Notification extends NotificationCore {};
class CustomizationField extends CustomizationFieldCore {};
class Hook extends HookCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Profile extends ProfileCore {};
class Dispatcher extends DispatcherCore {};
class Upgrader extends UpgraderCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Validate extends ValidateCore {};
