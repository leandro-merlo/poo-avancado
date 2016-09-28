<?php

namespace Source;

interface IProduct {

    function getId();

    function getName();

    function getDesc();

    function setId($id);

    function setName($name);

    function setDesc($desc);
}
