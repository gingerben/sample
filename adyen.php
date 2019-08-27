<?xml version="1.0"?>
<!--
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
-->
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="catalog_product_entity" resource="default" engine="innodb" comment="Catalog Product Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_set_id" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Attribute Set ID"/>
        <column xsi:type="varchar" name="type_id" nullable="false" length="32" default="simple" comment="Type ID"/>
        <column xsi:type="varchar" name="sku" nullable="true" length="64" comment="SKU"/>
        <column xsi:type="smallint" name="has_options" padding="6" unsigned="false" nullable="false" identity="false"
                default="0" comment="Has Options"/>
        <column xsi:type="smallint" name="required_options" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Required Options"/>
        <column xsi:type="timestamp" name="created_at" on_update="false" nullable="false" default="CURRENT_TIMESTAMP"
                comment="Creation Time"/>
        <column xsi:type="timestamp" name="updated_at" on_update="true" nullable="false" default="CURRENT_TIMESTAMP"
                comment="Update Time"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_ATTRIBUTE_SET_ID" indexType="btree">
            <column name="attribute_set_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_SKU" indexType="btree">
            <column name="sku"/>
        </index>
    </table>
    <table name="catalog_product_entity_datetime" resource="default" engine="innodb"
           comment="Catalog Product Datetime Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="datetime" name="value" on_update="false" nullable="true" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_DTIME_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_datetime" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_DTIME_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_datetime" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_ENTITY_DATETIME_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_datetime" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_ENTITY_DATETIME_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_DATETIME_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_DATETIME_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_decimal" resource="default" engine="innodb"
           comment="Catalog Product Decimal Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_DEC_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_decimal" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_DEC_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_decimal" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_ENTITY_DECIMAL_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_decimal" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_ENTITY_DECIMAL_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_DECIMAL_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_DECIMAL_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_int" resource="default" engine="innodb"
           comment="Catalog Product Integer Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="int" name="value" padding="11" unsigned="false" nullable="true" identity="false"
                comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_INT_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_int" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_INT_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_int" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_ENTITY_INT_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_int" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_ENTITY_INT_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_INT_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_INT_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_text" resource="default" engine="innodb"
           comment="Catalog Product Text Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="text" name="value" nullable="true" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_TEXT_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_text" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_TEXT_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_text" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_ENTITY_TEXT_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_text" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_ENTITY_TEXT_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_TEXT_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_TEXT_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_varchar" resource="default" engine="innodb"
           comment="Catalog Product Varchar Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="varchar" name="value" nullable="true" length="255" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_VCHR_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_varchar" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_VCHR_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_varchar" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_ENTITY_VARCHAR_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_varchar" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_ENTITY_VARCHAR_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_VARCHAR_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_VARCHAR_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_gallery" resource="default" engine="innodb"
           comment="Catalog Product Gallery Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="false" identity="false"
                default="0" comment="Position"/>
        <column xsi:type="varchar" name="value" nullable="true" length="255" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_GLR_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_gallery" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_GLR_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_gallery" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_ENTITY_GALLERY_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_gallery" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_ENTITY_GALLERY_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_GALLERY_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_GALLERY_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_GALLERY_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_category_entity" resource="default" engine="innodb" comment="Catalog Category Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_set_id" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Attribute Set ID"/>
        <column xsi:type="int" name="parent_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Parent Category ID"/>
        <column xsi:type="timestamp" name="created_at" on_update="false" nullable="false" default="CURRENT_TIMESTAMP"
                comment="Creation Time"/>
        <column xsi:type="timestamp" name="updated_at" on_update="true" nullable="false" default="CURRENT_TIMESTAMP"
                comment="Update Time"/>
        <column xsi:type="varchar" name="path" nullable="false" length="255" comment="Tree Path"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="false" identity="false"
                comment="Position"/>
        <column xsi:type="int" name="level" padding="11" unsigned="false" nullable="false" identity="false" default="0"
                comment="Tree Level"/>
        <column xsi:type="int" name="children_count" padding="11" unsigned="false" nullable="false" identity="false"
                comment="Child Count"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_ENTITY_LEVEL" indexType="btree">
            <column name="level"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_PATH" indexType="btree">
            <column name="path"/>
        </index>
    </table>
    <table name="catalog_category_entity_datetime" resource="default" engine="innodb"
           comment="Catalog Category Datetime Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="datetime" name="value" on_update="false" nullable="true" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_DTIME_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_category_entity_datetime" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_DTIME_ENTT_ID_CAT_CTGR_ENTT_ENTT_ID"
                    table="catalog_category_entity_datetime" column="entity_id" referenceTable="catalog_category_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_CATEGORY_ENTITY_DATETIME_STORE_ID_STORE_STORE_ID"
                    table="catalog_category_entity_datetime" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_CATEGORY_ENTITY_DATETIME_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_ENTITY_DATETIME_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_DATETIME_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_DATETIME_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_category_entity_decimal" resource="default" engine="innodb"
           comment="Catalog Category Decimal Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_DEC_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_category_entity_decimal" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_DEC_ENTT_ID_CAT_CTGR_ENTT_ENTT_ID"
                    table="catalog_category_entity_decimal" column="entity_id" referenceTable="catalog_category_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_CATEGORY_ENTITY_DECIMAL_STORE_ID_STORE_STORE_ID"
                    table="catalog_category_entity_decimal" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_CATEGORY_ENTITY_DECIMAL_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_ENTITY_DECIMAL_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_DECIMAL_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_DECIMAL_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_category_entity_int" resource="default" engine="innodb"
           comment="Catalog Category Integer Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="int" name="value" padding="11" unsigned="false" nullable="true" identity="false"
                comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_INT_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_category_entity_int" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_INT_ENTT_ID_CAT_CTGR_ENTT_ENTT_ID"
                    table="catalog_category_entity_int" column="entity_id" referenceTable="catalog_category_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_CATEGORY_ENTITY_INT_STORE_ID_STORE_STORE_ID"
                    table="catalog_category_entity_int" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_CATEGORY_ENTITY_INT_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_ENTITY_INT_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_INT_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_INT_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_category_entity_text" resource="default" engine="innodb"
           comment="Catalog Category Text Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="text" name="value" nullable="true" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_TEXT_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_category_entity_text" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_TEXT_ENTT_ID_CAT_CTGR_ENTT_ENTT_ID"
                    table="catalog_category_entity_text" column="entity_id" referenceTable="catalog_category_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_CATEGORY_ENTITY_TEXT_STORE_ID_STORE_STORE_ID"
                    table="catalog_category_entity_text" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_CATEGORY_ENTITY_TEXT_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_ENTITY_TEXT_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_TEXT_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_TEXT_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_category_entity_varchar" resource="default" engine="innodb"
           comment="Catalog Category Varchar Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="varchar" name="value" nullable="true" length="255" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_VCHR_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_category_entity_varchar" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_ENTT_VCHR_ENTT_ID_CAT_CTGR_ENTT_ENTT_ID"
                    table="catalog_category_entity_varchar" column="entity_id" referenceTable="catalog_category_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_CATEGORY_ENTITY_VARCHAR_STORE_ID_STORE_STORE_ID"
                    table="catalog_category_entity_varchar" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_CATEGORY_ENTITY_VARCHAR_ENTITY_ID_ATTRIBUTE_ID_STORE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_ENTITY_VARCHAR_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_VARCHAR_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_CATEGORY_ENTITY_VARCHAR_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_category_product" resource="default" engine="innodb"
           comment="Catalog Product To Category Linkage Table">
        <column xsi:type="int" name="entity_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Entity ID"/>
        <column xsi:type="int" name="category_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Category ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="false" identity="false"
                default="0" comment="Position"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="category_id"/>
            <column name="product_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_PRD_PRD_ID_CAT_PRD_ENTT_ENTT_ID" table="catalog_category_product"
                    column="product_id" referenceTable="catalog_product_entity" referenceColumn="entity_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_CTGR_PRD_CTGR_ID_CAT_CTGR_ENTT_ENTT_ID"
                    table="catalog_category_product" column="category_id" referenceTable="catalog_category_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_CATEGORY_PRODUCT_CATEGORY_ID_PRODUCT_ID">
            <column name="category_id"/>
            <column name="product_id"/>
        </constraint>
        <index referenceId="CATALOG_CATEGORY_PRODUCT_PRODUCT_ID" indexType="btree">
            <column name="product_id"/>
        </index>
    </table>
    <table name="catalog_category_product_index" resource="default" engine="innodb"
           comment="Catalog Category Product Index">
        <column xsi:type="int" name="category_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Category ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="true" identity="false"
                comment="Position"/>
        <column xsi:type="smallint" name="is_parent" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Parent"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="smallint" name="visibility" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Visibility"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="category_id"/>
            <column name="product_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CAT_CTGR_PRD_IDX_PRD_ID_STORE_ID_CTGR_ID_VISIBILITY" indexType="btree">
            <column name="product_id"/>
            <column name="store_id"/>
            <column name="category_id"/>
            <column name="visibility"/>
        </index>
        <index referenceId="CAT_CTGR_PRD_IDX_STORE_ID_CTGR_ID_VISIBILITY_IS_PARENT_POSITION" indexType="btree">
            <column name="store_id"/>
            <column name="category_id"/>
            <column name="visibility"/>
            <column name="is_parent"/>
            <column name="position"/>
        </index>
    </table>
    <table name="catalog_compare_item" resource="default" engine="innodb" comment="Catalog Compare Table">
        <column xsi:type="int" name="catalog_compare_item_id" padding="10" unsigned="true" nullable="false"
                identity="true" comment="Compare Item ID"/>
        <column xsi:type="int" name="visitor_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Visitor ID"/>
        <column xsi:type="int" name="customer_id" padding="10" unsigned="true" nullable="true" identity="false"
                comment="Customer ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="true" identity="false"
                comment="Store ID"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="catalog_compare_item_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CATALOG_COMPARE_ITEM_CUSTOMER_ID_CUSTOMER_ENTITY_ENTITY_ID"
                    table="catalog_compare_item" column="customer_id" referenceTable="customer_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_COMPARE_ITEM_PRODUCT_ID_CATALOG_PRODUCT_ENTITY_ENTITY_ID"
                    table="catalog_compare_item" column="product_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_COMPARE_ITEM_STORE_ID_STORE_STORE_ID" table="catalog_compare_item"
                    column="store_id" referenceTable="store" referenceColumn="store_id" onDelete="SET NULL"/>
        <index referenceId="CATALOG_COMPARE_ITEM_PRODUCT_ID" indexType="btree">
            <column name="product_id"/>
        </index>
        <index referenceId="CATALOG_COMPARE_ITEM_VISITOR_ID_PRODUCT_ID" indexType="btree">
            <column name="visitor_id"/>
            <column name="product_id"/>
        </index>
        <index referenceId="CATALOG_COMPARE_ITEM_CUSTOMER_ID_PRODUCT_ID" indexType="btree">
            <column name="customer_id"/>
            <column name="product_id"/>
        </index>
        <index referenceId="CATALOG_COMPARE_ITEM_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_website" resource="default" engine="innodb"
           comment="Catalog Product To Website Linkage Table">
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Product ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="product_id"/>
            <column name="website_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_WEBSITE_WEBSITE_ID_STORE_WEBSITE_WEBSITE_ID"
                    table="catalog_product_website" column="website_id" referenceTable="store_website"
                    referenceColumn="website_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_WS_PRD_ID_CAT_PRD_ENTT_ENTT_ID" table="catalog_product_website"
                    column="product_id" referenceTable="catalog_product_entity" referenceColumn="entity_id"
                    onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_WEBSITE_WEBSITE_ID" indexType="btree">
            <column name="website_id"/>
        </index>
    </table>
    <table name="catalog_product_link_type" resource="default" engine="innodb"
           comment="Catalog Product Link Type Table">
        <column xsi:type="smallint" name="link_type_id" padding="5" unsigned="true" nullable="false" identity="true"
                comment="Link Type ID"/>
        <column xsi:type="varchar" name="code" nullable="true" length="32" comment="Code"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="link_type_id"/>
        </constraint>
    </table>
    <table name="catalog_product_link" resource="default" engine="innodb"
           comment="Catalog Product To Product Linkage Table">
        <column xsi:type="int" name="link_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Link ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="int" name="linked_product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Linked Product ID"/>
        <column xsi:type="smallint" name="link_type_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Link Type ID"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="link_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_LNK_LNKED_PRD_ID_CAT_PRD_ENTT_ENTT_ID" table="catalog_product_link"
                    column="linked_product_id" referenceTable="catalog_product_entity" referenceColumn="entity_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_LINK_PRODUCT_ID_CATALOG_PRODUCT_ENTITY_ENTITY_ID"
                    table="catalog_product_link" column="product_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_LNK_LNK_TYPE_ID_CAT_PRD_LNK_TYPE_LNK_TYPE_ID"
                    table="catalog_product_link" column="link_type_id" referenceTable="catalog_product_link_type"
                    referenceColumn="link_type_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_LINK_LINK_TYPE_ID_PRODUCT_ID_LINKED_PRODUCT_ID">
            <column name="link_type_id"/>
            <column name="product_id"/>
            <column name="linked_product_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_LINK_PRODUCT_ID" indexType="btree">
            <column name="product_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_LINK_LINKED_PRODUCT_ID" indexType="btree">
            <column name="linked_product_id"/>
        </index>
    </table>
    <table name="catalog_product_link_attribute" resource="default" engine="innodb"
           comment="Catalog Product Link Attribute Table">
        <column xsi:type="smallint" name="product_link_attribute_id" padding="5" unsigned="true" nullable="false"
                identity="true" comment="Product Link Attribute ID"/>
        <column xsi:type="smallint" name="link_type_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Link Type ID"/>
        <column xsi:type="varchar" name="product_link_attribute_code" nullable="true" length="32"
                comment="Product Link Attribute Code"/>
        <column xsi:type="varchar" name="data_type" nullable="true" length="32" comment="Data Type"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="product_link_attribute_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_LNK_ATTR_LNK_TYPE_ID_CAT_PRD_LNK_TYPE_LNK_TYPE_ID"
                    table="catalog_product_link_attribute" column="link_type_id"
                    referenceTable="catalog_product_link_type" referenceColumn="link_type_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_LINK_ATTRIBUTE_LINK_TYPE_ID" indexType="btree">
            <column name="link_type_id"/>
        </index>
    </table>
    <table name="catalog_product_link_attribute_decimal" resource="default" engine="innodb"
           comment="Catalog Product Link Decimal Attribute Table">
        <column xsi:type="int" name="value_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="product_link_attribute_id" padding="5" unsigned="true" nullable="true"
                identity="false" comment="Product Link Attribute ID"/>
        <column xsi:type="int" name="link_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Link ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="false" default="0"
                comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_LNK_ATTR_DEC_LNK_ID_CAT_PRD_LNK_LNK_ID"
                    table="catalog_product_link_attribute_decimal" column="link_id"
                    referenceTable="catalog_product_link" referenceColumn="link_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="FK_AB2EFA9A14F7BCF1D5400056203D14B6"
                    table="catalog_product_link_attribute_decimal" column="product_link_attribute_id"
                    referenceTable="catalog_product_link_attribute" referenceColumn="product_link_attribute_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CAT_PRD_LNK_ATTR_DEC_PRD_LNK_ATTR_ID_LNK_ID">
            <column name="product_link_attribute_id"/>
            <column name="link_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_LINK_ATTRIBUTE_DECIMAL_LINK_ID" indexType="btree">
            <column name="link_id"/>
        </index>
    </table>
    <table name="catalog_product_link_attribute_int" resource="default" engine="innodb"
           comment="Catalog Product Link Integer Attribute Table">
        <column xsi:type="int" name="value_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="product_link_attribute_id" padding="5" unsigned="true" nullable="true"
                identity="false" comment="Product Link Attribute ID"/>
        <column xsi:type="int" name="link_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Link ID"/>
        <column xsi:type="int" name="value" padding="11" unsigned="false" nullable="false" identity="false" default="0"
                comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_LNK_ATTR_INT_LNK_ID_CAT_PRD_LNK_LNK_ID"
                    table="catalog_product_link_attribute_int" column="link_id" referenceTable="catalog_product_link"
                    referenceColumn="link_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="FK_D6D878F8BA2A4282F8DDED7E6E3DE35C"
                    table="catalog_product_link_attribute_int" column="product_link_attribute_id"
                    referenceTable="catalog_product_link_attribute" referenceColumn="product_link_attribute_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CAT_PRD_LNK_ATTR_INT_PRD_LNK_ATTR_ID_LNK_ID">
            <column name="product_link_attribute_id"/>
            <column name="link_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_LINK_ATTRIBUTE_INT_LINK_ID" indexType="btree">
            <column name="link_id"/>
        </index>
    </table>
    <table name="catalog_product_link_attribute_varchar" resource="default" engine="innodb"
           comment="Catalog Product Link Varchar Attribute Table">
        <column xsi:type="int" name="value_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="product_link_attribute_id" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Product Link Attribute ID"/>
        <column xsi:type="int" name="link_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Link ID"/>
        <column xsi:type="varchar" name="value" nullable="true" length="255" comment="Value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_LNK_ATTR_VCHR_LNK_ID_CAT_PRD_LNK_LNK_ID"
                    table="catalog_product_link_attribute_varchar" column="link_id"
                    referenceTable="catalog_product_link" referenceColumn="link_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="FK_DEE9C4DA61CFCC01DFCF50F0D79CEA51"
                    table="catalog_product_link_attribute_varchar" column="product_link_attribute_id"
                    referenceTable="catalog_product_link_attribute" referenceColumn="product_link_attribute_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CAT_PRD_LNK_ATTR_VCHR_PRD_LNK_ATTR_ID_LNK_ID">
            <column name="product_link_attribute_id"/>
            <column name="link_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_LINK_ATTRIBUTE_VARCHAR_LINK_ID" indexType="btree">
            <column name="link_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_tier_price" resource="default" engine="innodb"
           comment="Catalog Product Tier Price Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="11" unsigned="false" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="smallint" name="all_groups" padding="5" unsigned="true" nullable="false" identity="false"
                default="1" comment="Is Applicable To All Customer Groups"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="decimal" name="qty" scale="4" precision="12" unsigned="false" nullable="false" default="1"
                comment="QTY"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="false" default="0"
                comment="Value"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="percentage_value" scale="2" precision="5" unsigned="false" nullable="true"
                comment="Percentage value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_TIER_PRICE_CSTR_GROUP_ID_CSTR_GROUP_CSTR_GROUP_ID"
                    table="catalog_product_entity_tier_price" column="customer_group_id" referenceTable="customer_group"
                    referenceColumn="customer_group_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_TIER_PRICE_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_tier_price" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_TIER_PRICE_WS_ID_STORE_WS_WS_ID"
                    table="catalog_product_entity_tier_price" column="website_id" referenceTable="store_website"
                    referenceColumn="website_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="UNQ_E8AB433B9ACB00343ABB312AD2FAB087">
            <column name="entity_id"/>
            <column name="all_groups"/>
            <column name="customer_group_id"/>
            <column name="qty"/>
            <column name="website_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_ENTITY_TIER_PRICE_CUSTOMER_GROUP_ID" indexType="btree">
            <column name="customer_group_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_TIER_PRICE_WEBSITE_ID" indexType="btree">
            <column name="website_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_media_gallery" resource="default" engine="innodb"
           comment="Catalog Product Media Gallery Attribute Backend Table">
        <column xsi:type="int" name="value_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Value ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Attribute ID"/>
        <column xsi:type="varchar" name="value" nullable="true" length="255" comment="Value"/>
        <column xsi:type="varchar" name="media_type" nullable="false" length="32" default="image"
                comment="Media entry type"/>
        <column xsi:type="smallint" name="disabled" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Visibility status"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="value_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_MDA_GLR_ATTR_ID_EAV_ATTR_ATTR_ID"
                    table="catalog_product_entity_media_gallery" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_ENTITY_MEDIA_GALLERY_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_media_gallery_value" resource="default" engine="innodb"
           comment="Catalog Product Media Gallery Attribute Value Table">
        <column xsi:type="int" name="value_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Value ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Entity ID"/>
        <column xsi:type="varchar" name="label" nullable="true" length="255" comment="Label"/>
        <column xsi:type="int" name="position" padding="10" unsigned="true" nullable="true" identity="false"
                comment="Position"/>
        <column xsi:type="smallint" name="disabled" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Disabled"/>
        <column xsi:type="int" name="record_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Record Id"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="record_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_MDA_GLR_VAL_VAL_ID_CAT_PRD_ENTT_MDA_GLR_VAL_ID"
                    table="catalog_product_entity_media_gallery_value" column="value_id"
                    referenceTable="catalog_product_entity_media_gallery" referenceColumn="value_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_MDA_GLR_VAL_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_entity_media_gallery_value" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_MDA_GLR_VAL_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_media_gallery_value" column="entity_id"
                    referenceTable="catalog_product_entity" referenceColumn="entity_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_ENTITY_MEDIA_GALLERY_VALUE_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_MEDIA_GALLERY_VALUE_ENTITY_ID" indexType="btree">
            <column name="entity_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_ENTITY_MEDIA_GALLERY_VALUE_VALUE_ID" indexType="btree">
            <column name="value_id"/>
        </index>
        <index referenceId="CAT_PRD_ENTT_MDA_GLR_VAL_ENTT_ID_VAL_ID_STORE_ID" indexType="btree">
            <column name="entity_id"/>
            <column name="value_id"/>
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_option" resource="default" engine="innodb" comment="Catalog Product Option Table">
        <column xsi:type="int" name="option_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Option ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="varchar" name="type" nullable="true" length="50" comment="Type"/>
        <column xsi:type="smallint" name="is_require" padding="6" unsigned="false" nullable="false" identity="false"
                default="1" comment="Is Required"/>
        <column xsi:type="varchar" name="sku" nullable="true" length="64" comment="SKU"/>
        <column xsi:type="int" name="max_characters" padding="10" unsigned="true" nullable="true" identity="false"
                comment="Max Characters"/>
        <column xsi:type="varchar" name="file_extension" nullable="true" length="50" comment="File Extension"/>
        <column xsi:type="smallint" name="image_size_x" padding="5" unsigned="true" nullable="true" identity="false"
                comment="Image Size X"/>
        <column xsi:type="smallint" name="image_size_y" padding="5" unsigned="true" nullable="true" identity="false"
                comment="Image Size Y"/>
        <column xsi:type="int" name="sort_order" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Sort Order"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="option_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_OPT_PRD_ID_CAT_PRD_ENTT_ENTT_ID" table="catalog_product_option"
                    column="product_id" referenceTable="catalog_product_entity" referenceColumn="entity_id"
                    onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_OPTION_PRODUCT_ID" indexType="btree">
            <column name="product_id"/>
        </index>
    </table>
    <table name="catalog_product_option_price" resource="default" engine="innodb"
           comment="Catalog Product Option Price Table">
        <column xsi:type="int" name="option_price_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Option Price ID"/>
        <column xsi:type="int" name="option_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="false" default="0"
                comment="Price"/>
        <column xsi:type="varchar" name="price_type" nullable="false" length="7" default="fixed" comment="Price Type"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="option_price_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_OPT_PRICE_OPT_ID_CAT_PRD_OPT_OPT_ID"
                    table="catalog_product_option_price" column="option_id" referenceTable="catalog_product_option"
                    referenceColumn="option_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_OPTION_PRICE_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_option_price" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_OPTION_PRICE_OPTION_ID_STORE_ID">
            <column name="option_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_OPTION_PRICE_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_option_title" resource="default" engine="innodb"
           comment="Catalog Product Option Title Table">
        <column xsi:type="int" name="option_title_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Option Title ID"/>
        <column xsi:type="int" name="option_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="varchar" name="title" nullable="true" length="255" comment="Title"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="option_title_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_OPT_TTL_OPT_ID_CAT_PRD_OPT_OPT_ID"
                    table="catalog_product_option_title" column="option_id" referenceTable="catalog_product_option"
                    referenceColumn="option_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_OPTION_TITLE_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_option_title" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_OPTION_TITLE_OPTION_ID_STORE_ID">
            <column name="option_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_OPTION_TITLE_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_option_type_value" resource="default" engine="innodb"
           comment="Catalog Product Option Type Value Table">
        <column xsi:type="int" name="option_type_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Option Type ID"/>
        <column xsi:type="int" name="option_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option ID"/>
        <column xsi:type="varchar" name="sku" nullable="true" length="64" comment="SKU"/>
        <column xsi:type="int" name="sort_order" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Sort Order"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="option_type_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_OPT_TYPE_VAL_OPT_ID_CAT_PRD_OPT_OPT_ID"
                    table="catalog_product_option_type_value" column="option_id" referenceTable="catalog_product_option"
                    referenceColumn="option_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_OPTION_TYPE_VALUE_OPTION_ID" indexType="btree">
            <column name="option_id"/>
        </index>
    </table>
    <table name="catalog_product_option_type_price" resource="default" engine="innodb"
           comment="Catalog Product Option Type Price Table">
        <column xsi:type="int" name="option_type_price_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Option Type Price ID"/>
        <column xsi:type="int" name="option_type_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option Type ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="false" default="0"
                comment="Price"/>
        <column xsi:type="varchar" name="price_type" nullable="false" length="7" default="fixed" comment="Price Type"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="option_type_price_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="FK_B523E3378E8602F376CC415825576B7F"
                    table="catalog_product_option_type_price" column="option_type_id"
                    referenceTable="catalog_product_option_type_value" referenceColumn="option_type_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_OPTION_TYPE_PRICE_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_option_type_price" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_OPTION_TYPE_PRICE_OPTION_TYPE_ID_STORE_ID">
            <column name="option_type_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_OPTION_TYPE_PRICE_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_option_type_title" resource="default" engine="innodb"
           comment="Catalog Product Option Type Title Table">
        <column xsi:type="int" name="option_type_title_id" padding="10" unsigned="true" nullable="false" identity="true"
                comment="Option Type Title ID"/>
        <column xsi:type="int" name="option_type_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option Type ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="varchar" name="title" nullable="true" length="255" comment="Title"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="option_type_title_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="FK_C085B9CF2C2A302E8043FDEA1937D6A2"
                    table="catalog_product_option_type_title" column="option_type_id"
                    referenceTable="catalog_product_option_type_value" referenceColumn="option_type_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CATALOG_PRODUCT_OPTION_TYPE_TITLE_STORE_ID_STORE_STORE_ID"
                    table="catalog_product_option_type_title" column="store_id" referenceTable="store"
                    referenceColumn="store_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_OPTION_TYPE_TITLE_OPTION_TYPE_ID_STORE_ID">
            <column name="option_type_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_OPTION_TYPE_TITLE_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_eav_attribute" resource="default" engine="innodb" comment="Catalog EAV Attribute Table">
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="varchar" name="frontend_input_renderer" nullable="true" length="255"
                comment="Frontend Input Renderer"/>
        <column xsi:type="smallint" name="is_global" padding="5" unsigned="true" nullable="false" identity="false"
                default="1" comment="Is Global"/>
        <column xsi:type="smallint" name="is_visible" padding="5" unsigned="true" nullable="false" identity="false"
                default="1" comment="Is Visible"/>
        <column xsi:type="smallint" name="is_searchable" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Searchable"/>
        <column xsi:type="smallint" name="is_filterable" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Filterable"/>
        <column xsi:type="smallint" name="is_comparable" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Comparable"/>
        <column xsi:type="smallint" name="is_visible_on_front" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Visible On Front"/>
        <column xsi:type="smallint" name="is_html_allowed_on_front" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is HTML Allowed On Front"/>
        <column xsi:type="smallint" name="is_used_for_price_rules" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Used For Price Rules"/>
        <column xsi:type="smallint" name="is_filterable_in_search" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Filterable In Search"/>
        <column xsi:type="smallint" name="used_in_product_listing" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Used In Product Listing"/>
        <column xsi:type="smallint" name="used_for_sort_by" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Used For Sorting"/>
        <column xsi:type="varchar" name="apply_to" nullable="true" length="255" comment="Apply To"/>
        <column xsi:type="smallint" name="is_visible_in_advanced_search" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Visible In Advanced Search"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="false" identity="false"
                default="0" comment="Position"/>
        <column xsi:type="smallint" name="is_wysiwyg_enabled" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is WYSIWYG Enabled"/>
        <column xsi:type="smallint" name="is_used_for_promo_rules" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Used For Promo Rules"/>
        <column xsi:type="smallint" name="is_required_in_admin_store" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Required In Admin Store"/>
        <column xsi:type="smallint" name="is_used_in_grid" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Used in Grid"/>
        <column xsi:type="smallint" name="is_visible_in_grid" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Visible in Grid"/>
        <column xsi:type="smallint" name="is_filterable_in_grid" padding="5" unsigned="true" nullable="false"
                identity="false" default="0" comment="Is Filterable in Grid"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="attribute_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CATALOG_EAV_ATTRIBUTE_ATTRIBUTE_ID_EAV_ATTRIBUTE_ATTRIBUTE_ID"
                    table="catalog_eav_attribute" column="attribute_id" referenceTable="eav_attribute"
                    referenceColumn="attribute_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_EAV_ATTRIBUTE_USED_FOR_SORT_BY" indexType="btree">
            <column name="used_for_sort_by"/>
        </index>
        <index referenceId="CATALOG_EAV_ATTRIBUTE_USED_IN_PRODUCT_LISTING" indexType="btree">
            <column name="used_in_product_listing"/>
        </index>
    </table>
    <table name="catalog_product_relation" resource="default" engine="innodb" comment="Catalog Product Relation Table">
        <column xsi:type="int" name="parent_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Parent ID"/>
        <column xsi:type="int" name="child_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Child ID"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="parent_id"/>
            <column name="child_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_RELATION_CHILD_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_relation" column="child_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_RELATION_PARENT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_relation" column="parent_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_RELATION_CHILD_ID" indexType="btree">
            <column name="child_id"/>
        </index>
    </table>
    <table name="catalog_product_index_eav" resource="default" engine="innodb"
           comment="Catalog Product EAV Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="int" name="value" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="CAT_PRD_IDX_EAV_ENTT_ID_ATTR_ID_STORE_ID_VAL_SOURCE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_VALUE" indexType="btree">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_eav_decimal" resource="default" engine="innodb"
           comment="Catalog Product EAV Decimal Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="CAT_PRD_IDX_EAV_DEC_ENTT_ID_ATTR_ID_STORE_ID_VAL_SOURCE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_VALUE" indexType="btree">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_price" resource="default" engine="innodb"
           comment="Catalog Product Price Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="tax_class_id" padding="5" unsigned="true" nullable="true" identity="false"
                default="0" comment="Tax Class ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="final_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Final Price"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_CUSTOMER_GROUP_ID" indexType="btree">
            <column name="customer_group_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_MIN_PRICE" indexType="btree">
            <column name="min_price"/>
        </index>
        <index referenceId="CAT_PRD_IDX_PRICE_WS_ID_CSTR_GROUP_ID_MIN_PRICE" indexType="btree">
            <column name="website_id"/>
            <column name="customer_group_id"/>
            <column name="min_price"/>
        </index>
    </table>
    <table name="catalog_product_index_tier_price" resource="default" engine="innodb"
           comment="Catalog Product Tier Price Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_IDX_TIER_PRICE_CSTR_GROUP_ID_CSTR_GROUP_CSTR_GROUP_ID"
                    table="catalog_product_index_tier_price" column="customer_group_id" referenceTable="customer_group"
                    referenceColumn="customer_group_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_IDX_TIER_PRICE_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_index_tier_price" column="entity_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_IDX_TIER_PRICE_WS_ID_STORE_WS_WS_ID"
                    table="catalog_product_index_tier_price" column="website_id" referenceTable="store_website"
                    referenceColumn="website_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_INDEX_TIER_PRICE_CUSTOMER_GROUP_ID" indexType="btree">
            <column name="customer_group_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_TIER_PRICE_WEBSITE_ID" indexType="btree">
            <column name="website_id"/>
        </index>
    </table>
    <table name="catalog_product_index_website" resource="default" engine="innodb"
           comment="Catalog Product Website Index Table">
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="default_store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Default store id for website"/>
        <column xsi:type="date" name="website_date" comment="Website Date"/>
        <column xsi:type="float" name="rate" unsigned="false" nullable="true" default="1" comment="Rate"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="website_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_IDX_WS_WS_ID_STORE_WS_WS_ID" table="catalog_product_index_website"
                    column="website_id" referenceTable="store_website" referenceColumn="website_id" onDelete="CASCADE"/>
        <index referenceId="CATALOG_PRODUCT_INDEX_WEBSITE_WEBSITE_DATE" indexType="btree">
            <column name="website_date"/>
        </index>
    </table>
    <table name="catalog_product_index_price_cfg_opt_agr_idx" resource="default" engine="innodb"
           comment="Catalog Product Price Indexer Config Option Aggregate Index Table">
        <column xsi:type="int" name="parent_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Parent ID"/>
        <column xsi:type="int" name="child_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Child ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="parent_id"/>
            <column name="child_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_cfg_opt_agr_tmp" resource="default" engine="memory"
           comment="Catalog Product Price Indexer Config Option Aggregate Temp Table">
        <column xsi:type="int" name="parent_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Parent ID"/>
        <column xsi:type="int" name="child_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Child ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="parent_id"/>
            <column name="child_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_cfg_opt_idx" resource="default" engine="innodb"
           comment="Catalog Product Price Indexer Config Option Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_cfg_opt_tmp" resource="default" engine="memory"
           comment="Catalog Product Price Indexer Config Option Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_final_idx" resource="default" engine="innodb"
           comment="Catalog Product Price Indexer Final Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="tax_class_id" padding="5" unsigned="true" nullable="true" identity="false"
                default="0" comment="Tax Class ID"/>
        <column xsi:type="decimal" name="orig_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Original Price"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <column xsi:type="decimal" name="base_tier" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Base Tier"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_final_tmp" resource="default" engine="memory"
           comment="Catalog Product Price Indexer Final Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="tax_class_id" padding="5" unsigned="true" nullable="true" identity="false"
                default="0" comment="Tax Class ID"/>
        <column xsi:type="decimal" name="orig_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Original Price"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <column xsi:type="decimal" name="base_tier" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Base Tier"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_opt_idx" resource="default" engine="innodb"
           comment="Catalog Product Price Indexer Option Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_opt_tmp" resource="default" engine="memory"
           comment="Catalog Product Price Indexer Option Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_opt_agr_idx" resource="default" engine="innodb"
           comment="Catalog Product Price Indexer Option Aggregate Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="int" name="option_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
            <column name="option_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_price_opt_agr_tmp" resource="default" engine="memory"
           comment="Catalog Product Price Indexer Option Aggregate Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="int" name="option_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Option ID"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
            <column name="option_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_eav_idx" resource="default" engine="innodb"
           comment="Catalog Product EAV Indexer Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="int" name="value" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="CAT_PRD_IDX_EAV_IDX_ENTT_ID_ATTR_ID_STORE_ID_VAL_SOURCE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_IDX_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_IDX_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_IDX_VALUE" indexType="btree">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_eav_tmp" resource="default" engine="memory"
           comment="Catalog Product EAV Indexer Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="int" name="value" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="CAT_PRD_IDX_EAV_TMP_ENTT_ID_ATTR_ID_STORE_ID_VAL_SOURCE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_TMP_ATTRIBUTE_ID" indexType="hash">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_TMP_STORE_ID" indexType="hash">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_TMP_VALUE" indexType="hash">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_eav_decimal_idx" resource="default" engine="innodb"
           comment="Catalog Product EAV Decimal Indexer Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="CAT_PRD_IDX_EAV_DEC_IDX_ENTT_ID_ATTR_ID_STORE_ID_VAL_SOURCE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_IDX_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_IDX_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_IDX_VALUE" indexType="btree">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_eav_decimal_tmp" resource="default" engine="memory"
           comment="Catalog Product EAV Decimal Indexer Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="CAT_PRD_IDX_EAV_DEC_TMP_ENTT_ID_ATTR_ID_STORE_ID_VAL_SOURCE_ID">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_TMP_ATTRIBUTE_ID" indexType="hash">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_TMP_STORE_ID" indexType="hash">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_TMP_VALUE" indexType="hash">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_price_idx" resource="default" engine="innodb"
           comment="Catalog Product Price Indexer Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="tax_class_id" padding="5" unsigned="true" nullable="true" identity="false"
                default="0" comment="Tax Class ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="final_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Final Price"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_IDX_CUSTOMER_GROUP_ID" indexType="btree">
            <column name="customer_group_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_IDX_WEBSITE_ID" indexType="btree">
            <column name="website_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_IDX_MIN_PRICE" indexType="btree">
            <column name="min_price"/>
        </index>
    </table>
    <table name="catalog_product_index_price_tmp" resource="default" engine="memory"
           comment="Catalog Product Price Indexer Temp Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="tax_class_id" padding="5" unsigned="true" nullable="true" identity="false"
                default="0" comment="Tax Class ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="final_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Final Price"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_TMP_CUSTOMER_GROUP_ID" indexType="hash">
            <column name="customer_group_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_TMP_WEBSITE_ID" indexType="hash">
            <column name="website_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_TMP_MIN_PRICE" indexType="hash">
            <column name="min_price"/>
        </index>
    </table>
    <table name="catalog_category_product_index_tmp" resource="default" engine="memory"
           comment="Catalog Category Product Indexer temporary table">
        <column xsi:type="int" name="category_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Category ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="false" identity="false"
                default="0" comment="Position"/>
        <column xsi:type="smallint" name="is_parent" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Parent"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="smallint" name="visibility" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Visibility"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="category_id"/>
            <column name="product_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CAT_CTGR_PRD_IDX_TMP_PRD_ID_CTGR_ID_STORE_ID" indexType="hash">
            <column name="product_id"/>
            <column name="category_id"/>
            <column name="store_id"/>
        </index>
    </table>
    <table name="catalog_product_entity_media_gallery_value_to_entity" resource="default" engine="innodb"
           comment="Link Media value to Product entity table">
        <column xsi:type="int" name="value_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Value media Entry ID"/>
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Product Entity ID"/>
        <constraint xsi:type="foreign" referenceId="FK_A6C6C8FAA386736921D3A7C4B50B1185"
                    table="catalog_product_entity_media_gallery_value_to_entity" column="value_id"
                    referenceTable="catalog_product_entity_media_gallery" referenceColumn="value_id"
                    onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_ENTT_MDA_GLR_VAL_TO_ENTT_ENTT_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_entity_media_gallery_value_to_entity" column="entity_id"
                    referenceTable="catalog_product_entity" referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="unique" referenceId="CAT_PRD_ENTT_MDA_GLR_VAL_TO_ENTT_VAL_ID_ENTT_ID">
            <column name="value_id"/>
            <column name="entity_id"/>
        </constraint>
    </table>
    <table name="catalog_product_index_eav_replica" resource="default" engine="innodb"
           comment="Catalog Product EAV Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="int" name="value" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_VALUE" indexType="btree">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_eav_decimal_replica" resource="default" engine="innodb"
           comment="Catalog Product EAV Decimal Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="smallint" name="attribute_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Attribute ID"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Store ID"/>
        <column xsi:type="decimal" name="value" scale="4" precision="12" unsigned="false" nullable="false"
                comment="Value"/>
        <column xsi:type="int" name="source_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Original entity Id for attribute value"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="attribute_id"/>
            <column name="store_id"/>
            <column name="value"/>
            <column name="source_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_ATTRIBUTE_ID" indexType="btree">
            <column name="attribute_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_STORE_ID" indexType="btree">
            <column name="store_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_EAV_DECIMAL_VALUE" indexType="btree">
            <column name="value"/>
        </index>
    </table>
    <table name="catalog_product_index_price_replica" resource="default" engine="innodb"
           comment="Catalog Product Price Index Table">
        <column xsi:type="int" name="entity_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Entity ID"/>
        <column xsi:type="int" name="customer_group_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Customer Group ID"/>
        <column xsi:type="smallint" name="website_id" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Website ID"/>
        <column xsi:type="smallint" name="tax_class_id" padding="5" unsigned="true" nullable="true" identity="false"
                default="0" comment="Tax Class ID"/>
        <column xsi:type="decimal" name="price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Price"/>
        <column xsi:type="decimal" name="final_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Final Price"/>
        <column xsi:type="decimal" name="min_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Min Price"/>
        <column xsi:type="decimal" name="max_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Max Price"/>
        <column xsi:type="decimal" name="tier_price" scale="4" precision="12" unsigned="false" nullable="true"
                comment="Tier Price"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="entity_id"/>
            <column name="customer_group_id"/>
            <column name="website_id"/>
        </constraint>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_CUSTOMER_GROUP_ID" indexType="btree">
            <column name="customer_group_id"/>
        </index>
        <index referenceId="CATALOG_PRODUCT_INDEX_PRICE_MIN_PRICE" indexType="btree">
            <column name="min_price"/>
        </index>
        <index referenceId="CAT_PRD_IDX_PRICE_WS_ID_CSTR_GROUP_ID_MIN_PRICE" indexType="btree">
            <column name="website_id"/>
            <column name="customer_group_id"/>
            <column name="min_price"/>
        </index>
    </table>
    <table name="catalog_category_product_index_replica" resource="default" engine="innodb"
           comment="Catalog Category Product Index">
        <column xsi:type="int" name="category_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Category ID"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                default="0" comment="Product ID"/>
        <column xsi:type="int" name="position" padding="11" unsigned="false" nullable="true" identity="false"
                comment="Position"/>
        <column xsi:type="smallint" name="is_parent" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Is Parent"/>
        <column xsi:type="smallint" name="store_id" padding="5" unsigned="true" nullable="false" identity="false"
                default="0" comment="Store ID"/>
        <column xsi:type="smallint" name="visibility" padding="5" unsigned="true" nullable="false" identity="false"
                comment="Visibility"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="category_id"/>
            <column name="product_id"/>
            <column name="store_id"/>
        </constraint>
        <index referenceId="CAT_CTGR_PRD_IDX_PRD_ID_STORE_ID_CTGR_ID_VISIBILITY" indexType="btree">
            <column name="product_id"/>
            <column name="store_id"/>
            <column name="category_id"/>
            <column name="visibility"/>
        </index>
        <index referenceId="CAT_CTGR_PRD_IDX_STORE_ID_CTGR_ID_VISIBILITY_IS_PARENT_POSITION" indexType="btree">
            <column name="store_id"/>
            <column name="category_id"/>
            <column name="visibility"/>
            <column name="is_parent"/>
            <column name="position"/>
        </index>
    </table>
    <table name="catalog_product_frontend_action" resource="default" engine="innodb"
           comment="Catalog Product Frontend Action Table">
        <column xsi:type="bigint" name="action_id" padding="20" unsigned="true" nullable="false" identity="true"
                comment="Product Action Id"/>
        <column xsi:type="varchar" name="type_id" nullable="false" length="64" comment="Type of product action"/>
        <column xsi:type="int" name="visitor_id" padding="10" unsigned="true" nullable="true" identity="false"
                comment="Visitor Id"/>
        <column xsi:type="int" name="customer_id" padding="10" unsigned="true" nullable="true" identity="false"
                comment="Customer Id"/>
        <column xsi:type="int" name="product_id" padding="10" unsigned="true" nullable="false" identity="false"
                comment="Product Id"/>
        <column xsi:type="bigint" name="added_at" padding="20" unsigned="false" nullable="false" identity="false"
                comment="Added At"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="action_id"/>
        </constraint>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_FRONTEND_ACTION_CSTR_ID_CSTR_ENTT_ENTT_ID"
                    table="catalog_product_frontend_action" column="customer_id" referenceTable="customer_entity"
                    referenceColumn="entity_id" onDelete="CASCADE"/>
        <constraint xsi:type="foreign" referenceId="CAT_PRD_FRONTEND_ACTION_PRD_ID_CAT_PRD_ENTT_ENTT_ID"
                    table="catalog_product_frontend_action" column="product_id" referenceTable="catalog_product_entity"
                    referenceColumn="entity_id" onDelete="CASCADE" />
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_FRONTEND_ACTION_VISITOR_ID_PRODUCT_ID_TYPE_ID">
            <column name="visitor_id"/>
            <column name="product_id"/>
            <column name="type_id"/>
        </constraint>
        <constraint xsi:type="unique" referenceId="CATALOG_PRODUCT_FRONTEND_ACTION_CUSTOMER_ID_PRODUCT_ID_TYPE_ID">
            <column name="customer_id"/>
            <column name="product_id"/>
            <column name="type_id"/>
        </constraint>
    </table>
</schema>
