<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * Distinguishes the different kinds of TypeDefs.
 */
enum TypeDefKind: string
{
    /** A string value. */
    case STRING_KIND = 'STRING_KIND';

    /** An integer value. */
    case INTEGER_KIND = 'INTEGER_KIND';

    /** A boolean value. */
    case BOOLEAN_KIND = 'BOOLEAN_KIND';

    /**
     * A list of values all having the same type.
     *
     * Always paired with a ListTypeDef.
     */
    case LIST_KIND = 'LIST_KIND';

    /**
     * A named type defined in the GraphQL schema, with fields and functions.
     *
     * Always paired with an ObjectTypeDef.
     */
    case OBJECT_KIND = 'OBJECT_KIND';

    /**
     * A named type of functions that can be matched+implemented by other objects+interfaces.
     *
     * Always paired with an InterfaceTypeDef.
     */
    case INTERFACE_KIND = 'INTERFACE_KIND';

    /**
     * A special kind used to signify that no value is returned.
     *
     * This is used for functions that have no return value. The outer TypeDef specifying this Kind is always Optional, as the Void is never actually represented.
     */
    case VOID_KIND = 'VOID_KIND';
}