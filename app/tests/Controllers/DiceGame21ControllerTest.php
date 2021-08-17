<?php

declare(strict_types=1);


/**
 * Namespace declared and others in use.
 */
namespace Daap19\UnitTests;
use App\Http\Controllers\DiceGame21Controller;
use Tests\TestCase;



/**
 * Test suite for the controller.
 */
class DiceGame21ControllerTest extends TestCase
{
    protected object $diceGame21Controller;

    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->diceGame21Controller = new DiceGame21Controller();
    }


    /**
     * @description tearDown for test suit. Each test case will run this when done is done.
     */
    final protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    /**
     * @test
     * @description
     */
    final public function test_DiceController(): void
    {
        $this->assertIsObject($this->diceGame21Controller);
        $this->assertInstanceOf('App\Http\Controllers\DiceGame21Controller', $this->diceGame21Controller);
        $this->assertInstanceOf(DiceGame21Controller::class, $this->diceGame21Controller);

        $this->assertTrue(method_exists($this->diceGame21Controller, 'viewInit'));
        $this->assertTrue(method_exists($this->diceGame21Controller, 'processInit'));
        $this->assertTrue(method_exists($this->diceGame21Controller, 'viewMain'));
        $this->assertTrue(method_exists($this->diceGame21Controller, 'processMain'));
        $this->assertTrue(method_exists($this->diceGame21Controller, 'viewResult'));
        $this->assertTrue(method_exists($this->diceGame21Controller, 'processResult'));
        $this->assertTrue(method_exists($this->diceGame21Controller, 'viewFinalResult'));
    }


//    /**
//     * @test
//     * @description Test request and response of DiceGame21Controller.
//     */
//    final public function test_DiceController_init_request_and_response(): void
//    {
//        $requestData = [
//            'players' => '2',
//            'credit' => '35',
//            'machine' => 'true'
//        ];
//
//        $stub = $this->createMock(DiceGame21Controller::class);
//        $stub->method('viewInit')
//            ->willReturn(Request::create('/dice/init/process', 'POST', $requestData));
//
//
//        $request = $stub->viewInit();
//        $response = $stub->processInit($request);
//
//
//        $this->assertEquals('2', $request->input('players'));
//        $this->assertEquals('35', $request->input('credit'));
//        $this->assertEquals('true', $request->input('machine'));
//        $response->assertRedirect('diceMainView');
//        $response->assertStatus(302);
//    }
}
