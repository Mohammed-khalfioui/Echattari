-- إنشاء قاعدة البيانات chattari
CREATE DATABASE chattari1;

-- استخدام قاعدة البيانات chattari
USE chattari1;

-- إنشاء جدول factur_t
CREATE TABLE factur_t (
  id INT PRIMARY KEY AUTO_INCREMENT,
  code varchar(50),
  المنتج VARCHAR(255),
  qnt INT,
  السعر float,
  ijmal float
);

-- إنشاء جدول factur_j
CREATE TABLE factur_j (
  id INT PRIMARY KEY AUTO_INCREMENT,
  code varchar(50),
  المنتج VARCHAR(255),
  qnt INT,
  السعر float,
  التخفيض int,
  ijmal float
);

-- إنشاء جدول books_school
CREATE TABLE books_school (
  code varchar(50) PRIMARY KEY,
  name VARCHAR(255),
  mostawa VARCHAR(50),
  price_t float,
  qnt INT
);

-- إنشاء جدول pdf_j
CREATE TABLE pdf_j (
  name VARCHAR(255),
  date datetime
);

-- إنشاء جدول pdf_t
CREATE TABLE pdf_t (
  name VARCHAR(255),
  date datetime
);

-- إنشاء جدول الادوات_المدرسية
CREATE TABLE الادوات_المدرسية (
  code varchar(50) PRIMARY KEY,
  name VARCHAR(255),
  price_t float,
  price_j float,
  qnt INT
);

-- إنشاء جدول العملاء
CREATE TABLE العملاء (
  code varchar(50) PRIMARY KEY,
  name VARCHAR(255),
  tele VARCHAR(255),
  city VARCHAR(255)
);

-- إنشاء جدول العميل
CREATE TABLE العميل (
  code varchar(50) PRIMARY KEY,
  name VARCHAR(255),
  tele VARCHAR(255),
  city VARCHAR(255)
);

-- إنشاء جدول روايات_و_كتب_متنوعة
CREATE TABLE روايات_و_كتب_متنوعة (
  code varchar(50) PRIMARY KEY,
  name VARCHAR(255),
  price_t float,
  qnt INT
);