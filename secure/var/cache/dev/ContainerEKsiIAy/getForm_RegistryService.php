<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Form\\ActiviteType' => ['privates', 'App\\Form\\ActiviteType', 'getActiviteTypeService', true],
            'App\\Form\\AtelierType' => ['privates', 'App\\Form\\AtelierType', 'getAtelierTypeService', true],
            'App\\Form\\CommandType' => ['privates', 'App\\Form\\CommandType', 'getCommandTypeService', true],
            'App\\Form\\CompetenceType' => ['privates', 'App\\Form\\CompetenceType', 'getCompetenceTypeService', true],
            'App\\Form\\ImageType' => ['privates', 'App\\Form\\ImageType', 'getImageTypeService', true],
            'App\\Form\\InscriptionType' => ['privates', 'App\\Form\\InscriptionType', 'getInscriptionTypeService', true],
            'App\\Form\\LyceeType' => ['privates', 'App\\Form\\LyceeType', 'getLyceeTypeService', true],
            'App\\Form\\MetierType' => ['privates', 'App\\Form\\MetierType', 'getMetierTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\RessourceType' => ['privates', 'App\\Form\\RessourceType', 'getRessourceTypeService', true],
            'App\\Form\\SalleType' => ['privates', 'App\\Form\\SalleType', 'getSalleTypeService', true],
            'App\\Form\\SecteurType' => ['privates', 'App\\Form\\SecteurType', 'getSecteurTypeService', true],
            'App\\Form\\SectionType' => ['privates', 'App\\Form\\SectionType', 'getSectionTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\ActiviteType' => '?',
            'App\\Form\\AtelierType' => '?',
            'App\\Form\\CommandType' => '?',
            'App\\Form\\CompetenceType' => '?',
            'App\\Form\\ImageType' => '?',
            'App\\Form\\InscriptionType' => '?',
            'App\\Form\\LyceeType' => '?',
            'App\\Form\\MetierType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\RessourceType' => '?',
            'App\\Form\\SalleType' => '?',
            'App\\Form\\SecteurType' => '?',
            'App\\Form\\SectionType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? self::getDataCollector_FormService($container))));
    }
}
