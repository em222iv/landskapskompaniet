<?php
/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-19
 * Time: 20:05
 */
use App\User;

class loginTest extends TestCase
{
    /*
     *Starting session for test
     */
    private $user = array(
        'email' => 'admin@gmail.com',
        'password' => 'password',
    );
    public function setUp()
    {
        parent::setUp();
        Session::start();
    }

    /**
     * Test: create administrator
     */
    public function test_create()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
    /**
     * Test: test if created admin exists
     */
    public function test_adminExist()
    {
        $this->assertTrue(Auth::attempt($this->user));
    }
    /**
     * Test: Test a login with admin
     */
    public function test_login()
    {

        $this->user = array_add($this->user,'_token',csrf_token());

        $this->call('POST', '/auth/login', $this->user);
        $this->assertResponseStatus(302);
        $this->assertRedirectedToRoute('admin.home');
    }
    public function test_failed_login()
    {
        $this->user['password'] = 'pass';
        $this->user = array_add($this->user,'_token',csrf_token());

        $this->call('POST', '/auth/login', $this->user);
        $this->assertResponseStatus(302);
        $this->assertRedirectedToRoute('admin.home');
        $this->assertSessionHasErrors('password');
    }
    /**
     * Test: Delete admin
     */
    public function test_delete()
    {
        User::where('email', '=', 'admin@gmail.com')->delete();

        $this->assertFalse(Auth::attempt($this->user));
    }
}

