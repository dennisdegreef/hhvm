<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class C {
  public function frob(): void {}
}

function f(): void {
  if (true) {
    $c = new C();

    if (true) {
    }
  } else {
    $c = new C();
  }

  $c->frob();
}
