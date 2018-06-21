<?php

namespace Tests\Unit\Model;

use Tests\SuiteTestCase\IeducarTestCase;

class PessoaFjTest extends IeducarTestCase
{
    public function getYamlDataSet()
    {
        return 'pessoafisica.yaml';
    }

    public function testGetById()
    {
        $pessoaFj = new \clsPessoaFj();
        $pessoaFj->idpes = 2;
        $pessoa = $pessoaFj->detalhe();

        $this->assertEquals($pessoa['nome'], 'Fulano');
        $this->assertEquals($pessoa['idpes'], 2);
    }


}