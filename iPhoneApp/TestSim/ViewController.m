//
//  ViewController.m
//  TestSim
//
//  Created by Roger Chen on 10/8/12.
//  Copyright (c) 2012 Roger Chen. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad
{
    [super viewDidLoad];
	// Do any additional setup after loading the view, typically from a nib.
    
    NSString *site = @"http://corgiland.com/cs147/";
    NSURL *url = [NSURL URLWithString:site];
    NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
    
    [webView loadRequest:requestObj];
    
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
